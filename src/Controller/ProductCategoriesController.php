<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductCategories Controller
 *
 * @property \App\Model\Table\ProductCategoriesTable $ProductCategories
 * @method \App\Model\Entity\ProductCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productCategories = $this->ProductCategories->find()->contain(['Categories','Products']);
        $this->set(compact('productCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productCategory = $this->ProductCategories->get($id, [
            'contain' => ['Categories', 'Products'],
        ]);

        $this->set(compact('productCategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productCategory = $this->ProductCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $productCategory = $this->ProductCategories->patchEntity($productCategory, $this->request->getData());
            if ($this->ProductCategories->save($productCategory)) {
                $this->Flash->success(__('The product category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product category could not be saved. Please, try again.'));
        }
        $categories = $this->ProductCategories->Categories->find('list', ['limit' => 200])->all();
        $products = $this->ProductCategories->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productCategory', 'categories', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productCategory = $this->ProductCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productCategory = $this->ProductCategories->patchEntity($productCategory, $this->request->getData());
            if ($this->ProductCategories->save($productCategory)) {
                $this->Flash->success(__('The product category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product category could not be saved. Please, try again.'));
        }
        $categories = $this->ProductCategories->Categories->find('list', ['limit' => 200])->all();
        $products = $this->ProductCategories->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productCategory', 'categories', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productCategory = $this->ProductCategories->get($id);
        if ($this->ProductCategories->delete($productCategory)) {
            $this->Flash->success(__('The product category has been deleted.'));
        } else {
            $this->Flash->error(__('The product category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
