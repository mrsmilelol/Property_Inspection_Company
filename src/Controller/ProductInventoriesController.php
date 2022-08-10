<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductInventories Controller
 *
 * @property \App\Model\Table\ProductInventoriesTable $ProductInventories
 * @method \App\Model\Entity\ProductInventory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductInventoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productInventories = $this->paginate($this->ProductInventories);

        $this->set(compact('productInventories'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Inventory id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productInventory = $this->ProductInventories->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productInventory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productInventory = $this->ProductInventories->newEmptyEntity();
        if ($this->request->is('post')) {
            $productInventory = $this->ProductInventories->patchEntity($productInventory, $this->request->getData());
            if ($this->ProductInventories->save($productInventory)) {
                $this->Flash->success(__('The product inventory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product inventory could not be saved. Please, try again.'));
        }
        $this->set(compact('productInventory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Inventory id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productInventory = $this->ProductInventories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productInventory = $this->ProductInventories->patchEntity($productInventory, $this->request->getData());
            if ($this->ProductInventories->save($productInventory)) {
                $this->Flash->success(__('The product inventory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product inventory could not be saved. Please, try again.'));
        }
        $this->set(compact('productInventory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Inventory id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productInventory = $this->ProductInventories->get($id);
        if ($this->ProductInventories->delete($productInventory)) {
            $this->Flash->success(__('The product inventory has been deleted.'));
        } else {
            $this->Flash->error(__('The product inventory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
