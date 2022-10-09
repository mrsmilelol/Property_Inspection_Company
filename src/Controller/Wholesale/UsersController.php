<?php
declare(strict_types=1);

namespace App\Controller\Wholesale;

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
        $this->Authentication->addUnauthenticatedActions(['edit','add','view']);
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

    public function dashboard($id=null){
        /*$user = $this->Users->get($id, [
            'contain' => ['UserAddresses']]);*/
        $users = $this->Users->find('list');
        $the_user = $this->request->getSession()->read('Auth.id');
        $user = $this->Users->find()->where(['Users.id' => $the_user]);
        $addresses = $this->Users->UserAddresses->find()
            ->where(['UserAddresses.user_id'=>$the_user])
            ->find('all')->toArray();

        $orders = $this->fetchTable('Orders')->find('all')->where(['Orders.user_id' => $the_user])->toArray();

        $this->set(compact('addresses','orders'));
    }

    public function account($id){
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your changes have been saved. Please log out and login again to see your changes.'));

                return $this->redirect(['action' => 'dashboard']);
            }
            $this->Flash->error(__('Your changes could not be saved. Please, try again.'));
        }
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'userTypes'));
    }

//    /**
//     * Add Wholesale account method
//     *
//     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
//     */
//    public function addWholesale($id = null)
//    {
//        $user = $this->Users->newEmptyEntity();
//        //$this->loadModel("WholesaleRequests");
//        $wholesaleRequest = $this->fetchTable('WholesaleRequests')->get($id);
//        $token = Security::hash(Security::randomBytes(32));
//        $user->user_type = $this->Users->UserTypes->get(2);
//        $user->email = $wholesaleRequest->email;
//        $user->username = $wholesaleRequest->email;
//        $user->lastname = $wholesaleRequest->business_name;
//        $user->firstname = $wholesaleRequest->business_name;
//        $user->password = $wholesaleRequest->email;
//        $user->phone = $wholesaleRequest->phone;
//        $user->token = $token;
//        $user->verified = 1;
//        $user->status = 1;
//
//        $this->Users->save($user);
//        $userId = $user->id;
//        $session = $this->request->getSession();
//        $session->write('User.id', $userId);
//
//        return $this->redirect(['controller' => 'WholesaleRequests','action' => 'addUser',$id]);
//    }

//    /**
//     * Delete method
//     *
//     * @param string|null $id User id.
//     * @return \Cake\Http\Response|null|void Redirects to index.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function delete($id = null)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//        $user = $this->Users->get($id);
//        if ($this->Users->delete($user)) {
//            $this->Flash->success(__('The user has been deleted.'));
//        } else {
//            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
//        }
//
//        return $this->redirect(['action' => 'index']);
//    }

}
