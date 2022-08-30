<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \Authentication\Controller\Component\AuthenticationComponent $Authentication
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
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
     * Initialize method
     *
     * allowUnauthenticated - specifies pages which can be accessed without user authentication
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['login','passwordReset','edit']);
    }

    /**
     * User login method, checks if user exists inside the database then checks whether user status is valid
     * If everything is valid user is being redirected to the Quote Request page
     *
     * @return \Cake\Http\Response|void|null
     */
    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $user = $this->Authentication->getIdentity();
            //check user status if the account was disabled, deny access
            if (!$user->get('status')) {
                $this->Authentication->logout();
                $this->Flash->error('Your account has been disabled.');

                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
            // redirect to /quote-requests after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Products',
                'action' => 'index',
            ]);

            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid email or password.'));
        }
    }

    /**
     * User log out method upon execution the user is being redirected back to the login screen
     *
     * @return \Cake\Http\Response|void|null
     */
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();

            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
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
            'contain' => ['UserTypes', 'ProductReviews', 'ShoppingSessions', 'UserAddresses'],
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
     * userStatus method changes the user status from 0 to 1 and vise versa allowing to disable user access
     *
     * @param $id
     * @param $status
     * @return \Cake\Http\Response|null|void Redirects to index.
     */
    public function userStatus($id = null, $status)
    {
        $this->request->allowMethod(['post']);
        //get user id from Users
        $user = $this ->Users->get($id);
        //change user status
        if ($status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        //notify user about status being changed
        if ($this->Users->save($user)) {
            $this->Flash->success(__('The users status has changed.'));
        }

        return $this->redirect(['action' => 'index']);
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
            //check if the email correspond with the user inside the database
            $user = $this->Users->findByEmail($this->request->getData('email'))->first();
            //if there is no record of the user throw an error
            if (is_null($user)) {
                $this->Flash->error('This email is invalid.');
            } else {
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
                    'userId' => $user->id,
                ]);
                //send the email
                $result = $emailReset->deliver();

                //Error handling
                if ($result) {
                    $this->Flash->success('Reset password link has been sent to your email (' . $email . '), please check your email.');
                } else {
                    $this ->Flash->error('Error, unable to send email.');
                }
            }
        }
    }
}
