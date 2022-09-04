<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Wholesale\AppController;
use function App\Controller\__;

/**
 * ShoppingSessions Controller
 *
 * @property \App\Model\Table\ShoppingSessionsTable $ShoppingSessions
 * @method \App\Model\Entity\ShoppingSession[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShoppingSessionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Products'],
        ];
        $shoppingSessions = $this->paginate($this->ShoppingSessions);

        $this->set(compact('shoppingSessions'));
    }

    /**
     * View method
     *
     * @param string|null $id Shopping Session id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shoppingSession = $this->ShoppingSessions->get($id, [
            'contain' => ['Users', 'Products', 'Orders'],
        ]);

        $this->set(compact('shoppingSession'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shoppingSession = $this->ShoppingSessions->newEmptyEntity();
        if ($this->request->is('post')) {
            $shoppingSession = $this->ShoppingSessions->patchEntity($shoppingSession, $this->request->getData());
            if ($this->ShoppingSessions->save($shoppingSession)) {
                $this->Flash->success(__('The shopping session has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shopping session could not be saved. Please, try again.'));
        }
        $users = $this->ShoppingSessions->Users->find('list', ['limit' => 200])->all();
        $products = $this->ShoppingSessions->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('shoppingSession', 'users', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shopping Session id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shoppingSession = $this->ShoppingSessions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shoppingSession = $this->ShoppingSessions->patchEntity($shoppingSession, $this->request->getData());
            if ($this->ShoppingSessions->save($shoppingSession)) {
                $this->Flash->success(__('The shopping session has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shopping session could not be saved. Please, try again.'));
        }
        $users = $this->ShoppingSessions->Users->find('list', ['limit' => 200])->all();
        $products = $this->ShoppingSessions->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('shoppingSession', 'users', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shopping Session id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shoppingSession = $this->ShoppingSessions->get($id);
        if ($this->ShoppingSessions->delete($shoppingSession)) {
            $this->Flash->success(__('The shopping session has been deleted.'));
        } else {
            $this->Flash->error(__('The shopping session could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
