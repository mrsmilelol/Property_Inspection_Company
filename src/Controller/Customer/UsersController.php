<?php
declare(strict_types=1);

namespace App\Controller\Customer;

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

    /**
     * @param $id
     * @return void
     */
    public function dashboard($id = null)
    {
        $users = $this->Users->find('list');
        $the_user = $this->request->getSession()->read('Auth.id');
        $user = $this->Users->find()->where(['Users.id' => $the_user]);
        $addresses = $this->Users->UserAddresses->find()
            ->where(['UserAddresses.user_id' => $the_user])
            ->find('all')->toArray();

        $orders = $this->fetchTable('Orders')->find('all')->where(['Orders.user_id' => $the_user])->toArray();

        $this->set(compact('addresses', 'orders'));
    }

    /**
     * @param $id
     * @return \Cake\Http\Response|void|null
     */
    public function account($id)
    {
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
}
