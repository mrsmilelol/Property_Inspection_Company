<?php
declare(strict_types=1);

namespace App\Controller;

//use App\Controller\Wholesale\AppController;
//use function App\Controller\__;

/**
 * UserAddresses Controller
 *
 * @property \App\Model\Table\UserAddressesTable $UserAddresses
 * @method \App\Model\Entity\UserAddress[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserAddressesController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadComponent('Cart');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $userAddresses = $this->paginate($this->UserAddresses);

        $this->set(compact('userAddresses'));
    }

    /**
     * View method
     *
     * @param string|null $id User Address id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userAddress = $this->UserAddresses->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('userAddress'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function checkout()
    {
        $userAddress = $this->UserAddresses->newEmptyEntity();
        $orderItems = $this->Cart->getcart();
        if ($this->request->is('post')) {
            $userAddress = $this->UserAddresses->patchEntity($userAddress, $this->request->getData());
            if ($this->UserAddresses->save($userAddress)) {
                $this->Flash->success(__('The user address has been saved.'));

                return $this->redirect(['action' => 'success']);
            }
            $this->Flash->error(__('The user address could not be saved. Please, try again.'));

            return $this->redirect(['action' => 'cancel']);
        }
        $users = $this->UserAddresses->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('userAddress', 'users','orderItems'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Address id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userAddress = $this->UserAddresses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userAddress = $this->UserAddresses->patchEntity($userAddress, $this->request->getData());
            if ($this->UserAddresses->save($userAddress)) {
                $this->Flash->success(__('The user address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user address could not be saved. Please, try again.'));
        }
        $users = $this->UserAddresses->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('userAddress', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Address id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userAddress = $this->UserAddresses->get($id);
        if ($this->UserAddresses->delete($userAddress)) {
            $this->Flash->success(__('The user address has been deleted.'));
        } else {
            $this->Flash->error(__('The user address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function success()
    {
        $this->loadModel('Orders');
        $this->loadModel('OrdersProducts');
        $sessionData = $this->Cart->getcart();
        $user = $this->request->getSession()->read('Auth');
        $orderItems = $sessionData['Orderitems'];
        $total = 0;
        foreach ($orderItems as $orderItem){
            $total = $total + $orderItem['price'];
        }
        $order = $this->Orders->newEntity([
            'total'=>intval($total),
            'status'=>'Order is placed',
            'user_id'=> $user->id
        ]);
        $this->Orders->save($order);
    }

    public function cancel($id = null)
    {
    }
}
