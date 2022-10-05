<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Event\EventInterface;
use Cake\Mailer\Mailer;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;
use function __;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \Authentication\Controller\Component\AuthenticationComponent $Authentication
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.
        $this->Authentication->addUnauthenticatedActions(['login','signUp','verification','logout','passwordReset','editPassword']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserTypes'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }


    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['UserTypes', 'ProductReviews', 'UserAddresses'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            $userTable = TableRegistry::getTableLocator()->get('Users');

            $firstname = $this->request->getData('firstname');
            $lastname = $this->request->getData('lastname');
            $email = $this->request->getData('email');
            $token = Security::hash(Security::randomBytes(32));
            $user = $userTable->newEntity($this->request->getData());

            if ($userTable->save($user)) {
                $user->firstname = $firstname;
                $user->lastname = $lastname;
                $user->email = $email;
                $user->token = $token;
                $user->status = '1';
                $user->verified = '1';
                $this->Flash->success(__('The account has been added.'));
                $userTable->save($user);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Registration failed, please try again.'));
            }
        }
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'userTypes'));
    }

    public function signUp()
    {
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            $userTable = TableRegistry::getTableLocator()->get('Users');

            $firstname = $this->request->getData('firstname');
            $lastname = $this->request->getData('lastname');
            $email = $this->request->getData('email');
            $token = Security::hash(Security::randomBytes(32));
            $user = $userTable->newEntity($this->request->getData());

            if ($userTable->save($user)) {
                $user->user_type = $this->Users->UserTypes->get(3);
                $user->firstname = $firstname;
                $user->lastname = $lastname;
                $user->email = $email;
                $user->token = $token;
                $user->status = '0';
                $user->verified = '0';
                $this->Flash->success(__('Please check your email to verify the account.'));
                $emailSignUp = new Mailer('default');
                //$mailer->setTransport('default'); //your email configuration name
                $userTable->save($user);
                $emailSignUp
                    ->setEmailFormat('html')
                    ->setFrom('emailtestingfit3178@gmail.com')
                    ->setTo($email)
                    ->setSubject('Account Verification')
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('account_verification');

                $emailSignUp->setViewVars([
                    'firstname' => $lastname,
                    'lastname' => $firstname,
                    'token' => $token,
                ]);
                //$mailStatus = $mailer->deliver();
                //debug($mailStatus);
                $emailStatus = $emailSignUp->deliver();
                //Error handling
                if ($emailStatus) {
                    $this->Flash->success('Account Activation link has been sent to your email (' . $email . '), please check your email.');
                } else {
                    $this->Flash->error('Error, unable to send email.');
                }

                return $this->redirect(['prefix' => 'Admin','action' => 'login']);
            } else {
                $this->Flash->error(__('Registration failed, please try again.'));
            }
        }
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'userTypes'));
    }

    public function verification($token)
    {
        $userTable = TableRegistry::getTableLocator()->get('Users');
        $verify = $userTable->find('all')->where(['token' => $token])->first();
        $verify->verified = '1';
        $verify->status = 1;
        $userTable->save($verify);
        $this->Flash->success(__('Your email has been verified, and please login now.'));

        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    /**
     * Add Wholesale account method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function addWholesale($id = null)
    {
        $user = $this->Users->newEmptyEntity();
        //$this->loadModel("WholesaleRequests");
        $wholesaleRequest = $this->fetchTable('WholesaleRequests')->get($id);
        $token = Security::hash(Security::randomBytes(32));
        $user->user_type = $this->Users->UserTypes->get(2);
        $user->email = $wholesaleRequest->email;
        $user->username = $wholesaleRequest->email;
        $user->lastname = $wholesaleRequest->business_name;
        $user->firstname = $wholesaleRequest->business_name;
        $user->password = $wholesaleRequest->email;
        $user->phone = $wholesaleRequest->phone;
        $user->token = $token;
        $user->verified = 1;
        $user->status = 1;

        $this->Users->save($user);
        $userId = $user->id;
        //$session = $this->request->getSession();
        //$session->write('User.id', $userId);
        //debug($status);

        return $this->redirect(['prefix'=>'Admin','controller' => 'WholesaleRequests','action' => 'addUser',$userId]);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'userTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * userStatus method changes the user status from 0 to 1 and vice versa allowing to disable user access
     *
     * @param $id
     * @param $status
     * @return \Cake\Http\Response|null|void Redirects to index.
     */
    public function userStatus($id = null, $status)
    {
        $this->request->allowMethod(['post']);
        //get user id from Users
        $user = $this->Users->get($id);
        //change user status
        if ($status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        //notify user about status being changed
        if ($this->Users->save($user)) {
            $this->Flash->success(__('The user status has changed.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * userMaster method changes the user master value to 1 and vice versa allowing access at the topmost level
     *
     * @param $id
     * @param $master
     * @return \Cake\Http\Response|null|void Redirects to index.
     */
    public function userMaster($id = null, $master)
    {
        $this->request->allowMethod(['post']);
        //get user id from Users
        $user = $this->Users->get($id);
        //change user master value
        if ($master == 1) {
            $user->master = 0;
        } else {
            $user->master = 1;
        }
        //notify user about master value (and hence access level) being changed
        if ($this->Users->save($user)) {
            $this->Flash->success(__('The user level of access has changed.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function editPassword($token)
    {
        if ($this->request->is('post')) {
            $newPass = $this->request->getData('password');
            $userTable = TableRegistry::getTableLocator()->get('Users');
            $user = $userTable->find('all')->where(['token' => $token])->first();
            $user->password = $newPass;
            if ($userTable->save($user)) {
                $this->Flash->success('Password successfully reset. Please login using your new password');

                return $this->redirect(['action' => 'login']);
            }
        }
    }

    /**
     * passwordReset uses the provided email to check for the user record inside the database
     * if user was found generates password reset email and sends it to the email provided by the user
     *
     * @return \Cake\Http\Response|null|void Redirects to index.
     */
    public function passwordReset()
    {
        if ($this->request->is('post')) {
            //retrieve user email
            $email = $this->request->getData('email');
            $token = Security::hash(Security::randomBytes(25));
            $user = $this->Users->findByEmail($this->request->getData('email'))->first();
            //check if the email correspond with the user inside the database
            $userTable = TableRegistry::getTableLocator()->get('Users');
            //if there is no record of the user throw an error
            if ($email == null) {
                $this->Flash->error(__('Please insert your email address'));
            }

            if (is_null($user)) {
                $this->Flash->error('This email is invalid.');
            } else {
                $user->token = $token;
                if ($userTable->save($user)) {
                    //Create a new instance of the Mailer class
                    $emailReset = new Mailer('default');
                    $emailReset
                        ->setEmailFormat('html')
                        ->setFrom('emailtestingfit3178@gmail.com')
                        ->setTo($user->email)
                        ->setSubject('Forgot Password Reset')
                        ->viewBuilder()
                        ->disableAutoLayout()
                        ->setTemplate('password');
                    //pass the user id via email
                    $emailReset->setViewVars([
                        'token' => $token,
                    ]);
                    //send the email
                    $result = $emailReset->deliver();

                    //Error handling
                    if ($result) {
                        $this->Flash->success('Reset password link has been sent to your email (' . $email . '), please check your email.');
                    } else {
                        $this->Flash->error('Error, unable to send email.');
                    }
                }
            }
        }
    }
}
