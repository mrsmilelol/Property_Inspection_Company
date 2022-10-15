<?php
declare(strict_types=1);

namespace App\Controller\Customer;

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
    public function add()
    {
        $userAddress = $this->UserAddresses->newEmptyEntity();
        $state = array("VIC", "NSW", "SA","WA","NT","QLD","TAS");
        if ($this->request->is('post')) {
            $userAddress = $this->UserAddresses->patchEntity($userAddress, $this->request->getData());
            $userAddress->state = $userAddress->state + 1;
            if ($this->UserAddresses->save($userAddress)) {
                $this->Flash->success(__('Your address has been saved.'));

                return $this->redirect(['controller' => 'Users', 'action' => 'dashboard']);
            }
            $this->Flash->error(__('Your address could not be saved. Please, try again.'));
        }
        $users = $this->UserAddresses->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('userAddress', 'users', 'state'));
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
                $this->Flash->success(__('Your address has been saved.'));

                return $this->redirect(['controller' => 'Users', 'action' => 'dashboard']);
            }
            $this->Flash->error(__('Your address could not be saved. Please, try again.'));
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
}
