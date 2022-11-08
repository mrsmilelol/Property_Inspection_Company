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
    /**
     * @return void
     * @throws \Exception
     */
    public function initialize(): void
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
            ->where(['UserAddresses.user_id' => $the_user])
            ->find('all')->toArray();

        $state = array("VIC", "NSW", "SA","WA","NT","QLD","TAS");
        foreach ($addresses as $address){
            $state_str = $state[$address->state - 1];
            $address->state = $state_str;
        }

        $this->set(compact('addresses', 'state'));

        if (empty($addresses)) {
            $userAddress = $this->UserAddresses->newEmptyEntity();
            $orderItems = $this->Cart->getcart();
            //$session = $this->request->getSession()->read('pay_session');
            if ($this->request->is('post')) {
                //$this->Cart->addUserAddress($this->request->getData());
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
                //$this->Cart->addUserAddress($this->request->getData());
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

    /**
     * @return void
     */
    public function success()
    {
        //Loading the necessary models
        $this->loadModel('Orders');
        $this->loadModel('OrdersProducts');
        //Retrieving information from the shopping cart
        $sessionData = $this->Cart->getcart();
        //Retrieving information from the user
        $user = $this->request->getSession()->read('Auth');
        $orderItems = $sessionData['Orderitems'];
        $wholesaleOrderItems = $sessionData['WholesaleOrderitems'];
        //$userAddress = $sessionData['UserAddress'];
        $total = 0;
        //Check if the user is Wholesale customer
        if ($user->user_type_id == 2) {
            foreach ($wholesaleOrderItems as $orderItem) {
                //Calculating the total of the order
                $total = $total + $orderItem['price'] * $orderItem['quantity'];
            }
            //Creating the new record in the order
            $order = $this->Orders->newEntity([
                'total' => intval($total),
                'status' => 'Order is placed',
                'user_id' => $user->id,
            ]);
        } else {
            //Calculating the total of the order
            foreach ($orderItems as $orderItem) {
                $total = $total + $orderItem['price'] * $orderItem['quantity'];
            }
            //Creating the new record in the order
            $order = $this->Orders->newEntity([
                'total' => intval($total),
                'status' => 'Order is placed',
                'user_id' => $user->id,
            ]);
        }
        if ($total > 0) {
            //Saving the record
            $this->Orders->save($order);
        }
        //Getting the order ID
        $orderID = $this->Orders->find()->select(['id'])->where(['user_id' => $user->id])->order(['id' => 'DESC'])->first();
        //Check if the user is a Wholesale customer
        if ($user->user_type_id == 2) {
            foreach ($wholesaleOrderItems as $orderItem) {
                //Creating the new record for order products
                $orderProduct = $this->OrdersProducts->newEntity([
                    'order_id' => $orderID->id,
                    'product_id' => $orderItem['product_id'],
                    'quantity' => $orderItem['quantity'],
                ]);
                //Saving the record
                $this->OrdersProducts->save($orderProduct);
            }
        } else {
            foreach ($orderItems as $orderItem) {
                //Creating the new record for order products
                $orderProduct = $this->OrdersProducts->newEntity([
                    'order_id' => $orderID->id,
                    'product_id' => $orderItem['product_id'],
                    'quantity' => $orderItem['quantity'],
                ]);
                //Saving the record
                $this->OrdersProducts->save($orderProduct);
            }
        }
        //Finding the user address by their user id
        $oldUserAddress = $this->UserAddresses->findByUserId($user->id)->first();
        //Check if the user has not an address
        if($oldUserAddress == null){
            //Creating a new record
            $newUserAddress = $this->UserAddresses->newEntity(['user_id' => $userAddress[$user->id]['user_id'],
                'address_line_1' => $userAddress[$user->id]['address_line_1'],
                'address_line_2' => $userAddress[$user->id]['address_line_2'],
                'city' => $userAddress[$user->id]['city'],
                'country' => $userAddress[$user->id]['country'],
                'state' => $userAddress[$user->id]['state'],
                'postcode' => $userAddress[$user->id]['postcode']]);
            //Saving a record
            //$this->UserAddresses->save($newUserAddress);
        }
        else{
            //Updating the existing record
            /*$oldUserAddress = $this->UserAddresses->patchEntity($oldUserAddress,
                ['user_id' => $userAddress[$user->id]['user_id'],
                    'address_line_1' => $userAddress[$user->id]['address_line_1'],
                    'address_line_2' => $userAddress[$user->id]['address_line_2'],
                    'city' => $userAddress[$user->id]['city'],
                    'country' => $userAddress[$user->id]['country'],
                    'state' => $userAddress[$user->id]['state'],
                    'postcode' => $userAddress[$user->id]['postcode']]);*/
            //Saving the record
            //$this->UserAddresses->save($oldUserAddress);
        }
        $this->Cart->clear();
    }

    /**
     * @param $id
     * @return void
     */
    public function cancel($id = null)
    {
    }
}
