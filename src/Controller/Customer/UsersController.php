<?php
declare(strict_types=1);

namespace App\Controller\Customer;

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
            'contain' => ['UserTypes', 'ProductReviews', 'ShoppingSessions', 'UserAddresses'],
        ]);

        $this->set(compact('user'));
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
