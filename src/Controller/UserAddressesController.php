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
        $check = 0;
        $userID = $this->request->getSession()->read('Auth');
        $user = $this->request->getSession()->read('Auth');

        $the_user = $this->request->getSession()->read('Auth.id');
        $addresses = $this->UserAddresses->find()
            ->where(['UserAddresses.user_id'=>$the_user])
            ->find('all')->toArray();

        if (empty($addresses)) {
            $userAddress = $this->UserAddresses->newEmptyEntity();
            $orderItems = $this->Cart->getcart();
            //$session = $this->request->getSession()->read('pay_session');
            if ($this->request->is('post')) {
                $this->Cart->addUserAddress($this->request->getData());
//                if ($this->UserAddresses->save($userAddress)) {
//                    $this->Flash->success(__('The user address has been saved.'));
//
                    return $this->redirect(['action' => 'success']);
//                }
//                $this->Flash->error(__('The user address could not be saved. Please, try again.'));
//
//                return $this->redirect(['action' => 'cancel']);
            }
            $users = $this->UserAddresses->Users->find('list', ['limit' => 200])->all();
        }

        else {
            $check = 1;
            $address = $addresses[0]['id'];
            $userAddress = $this->UserAddresses->get($address, [
                'contain' => [],
            ]);
            $orderItems = $this->Cart->getcart();
            //$session = $this->request->getSession()->read('pay_session');
            if ($this->request->is(['patch', 'post', 'put'])) {
                $this->Cart->addUserAddress($this->request->getData());
                $userAddress = $this->UserAddresses->patchEntity($userAddress, $this->request->getData());
                if ($this->UserAddresses->save($userAddress)) {

                    return $this->redirect(['action' => 'success']);
                }
                $this->Flash->error(__('The user address could not be saved. Please, try again.'));

                return $this->redirect(['action' => 'cancel']);
            }
            $users = $this->UserAddresses->Users->find('list', ['limit' => 200])->all();
        }

        $this->set(compact('userAddress', 'users','orderItems','userID','user','check'));
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
        $wholesaleOrderItems = $sessionData['WholesaleOrderitems'];
        $userAddress = $sessionData['UserAddress'];
        $total = 0;
        if ($user->user_type_id == 2){
            foreach ($wholesaleOrderItems as $orderItem){
                $total = $total + $orderItem['price'] * $orderItem['quantity'];
            }
            $order = $this->Orders->newEntity([
                'total'=>intval($total),
                'status'=>'Order is placed',
                'user_id'=> $user->id
            ]);
        }
        else{
            foreach ($orderItems as $orderItem){
                $total = $total + $orderItem['price'] * $orderItem['quantity'];
            }
            $order = $this->Orders->newEntity([
                'total'=>intval($total),
                'status'=>'Order is placed',
                'user_id'=> $user->id
            ]);
        }
        if ( $total > 0)
        {$this->Orders->save($order);}

        $orderID = $this->Orders->find()->select(['id'])->where(['user_id'=> $user->id])->order(['id'=>'DESC'])->first();
        if ($user->user_type_id == 2) {
            foreach ($wholesaleOrderItems as $orderItem) {
                $orderProduct = $this->OrdersProducts->newEntity([
                    'order_id' => $orderID->id,
                    'product_id' => $orderItem['product_id'],
                    'quantity' => $orderItem['quantity']
                ]);
                $this->OrdersProducts->save($orderProduct);
            }
        }
        else{
            foreach ($orderItems as $orderItem) {
                $orderProduct = $this->OrdersProducts->newEntity([
                    'order_id' => $orderID->id,
                    'product_id' => $orderItem['product_id'],
                    'quantity' => $orderItem['quantity']
                ]);
                $this->OrdersProducts->save($orderProduct);
            }
        }
        $oldUserAddress = $this->UserAddresses->findByUserId($user->id)->first();
        if($oldUserAddress == null){
            $newUserAddress = $this->UserAddresses->newEntity(['user_id' => $userAddress[$user->id]['user_id'],
                'address_line_1' => $userAddress[$user->id]['address_line_1'],
                'address_line_2' => $userAddress[$user->id]['address_line_2'],
                'city' => $userAddress[$user->id]['city'],
                'country' => $userAddress[$user->id]['country'],
                'state' => $userAddress[$user->id]['state'],
                'postcode' => $userAddress[$user->id]['postcode']]);
            $this->UserAddresses->save($newUserAddress);
        }
        else{
            $oldUserAddress = $this->UserAddresses->patchEntity($oldUserAddress,
                ['user_id' => $userAddress[$user->id]['user_id'],
                    'address_line_1' => $userAddress[$user->id]['address_line_1'],
                    'address_line_2' => $userAddress[$user->id]['address_line_2'],
                    'city' => $userAddress[$user->id]['city'],
                    'country' => $userAddress[$user->id]['country'],
                    'state' => $userAddress[$user->id]['state'],
                    'postcode' => $userAddress[$user->id]['postcode']]);
            $this->UserAddresses->save($oldUserAddress);
        }
        $this->Cart->clear();
    }

    public function cancel($id = null)
    {
    }
}
