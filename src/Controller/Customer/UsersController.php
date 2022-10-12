<?php
declare(strict_types=1);

namespace App\Controller\Customer;

use Cake\Event\EventInterface;
use Cake\I18n\Number;
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


    public function dashboard($id=null){
        /*$user = $this->Users->get($id, [
            'contain' => ['UserAddresses']]);*/
        $users = $this->Users->find('list');
        $the_user = $this->request->getSession()->read('Auth.id');
        $user = $this->Users->find()->where(['Users.id' => $the_user]);
        $addresses = $this->Users->UserAddresses->find()
            ->where(['UserAddresses.user_id'=>$the_user])
            ->find('all')->toArray();

        $state = array("VIC", "NSW", "SA","WA","NT","QLD","TAS");
        foreach ($addresses as $address){
            $state_str = $state[$address->state -1];
            $address->state = $state_str;
        }

        $orders = $this->fetchTable('Orders')->find('all')->where(['Orders.user_id' => $the_user])->toArray();

        $this->set(compact('addresses','orders','state'));
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
