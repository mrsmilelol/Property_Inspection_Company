<?php
declare(strict_types=1);

namespace App\Controller\Customer;

use App\Controller\Wholesale\AppController;
use Cake\Event\EventInterface;
use function App\Controller\__;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.
        $this->Authentication->addUnauthenticatedActions(['index', 'view','add','sub','edit','editsub','delete','list']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentCategories'],
            'limit' => 200,
        ];
        $categories = $this->paginate($this->Categories->find('all')->where(['Categories.parent_id IS' => null]));
        $subcategories = $this->paginate($this->Categories->find('all')->where(['Categories.parent_id IS NOT' => null]));
        $this->set(compact('categories', 'subcategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['ParentCategories', 'Products', 'ChildCategories'],
        ]);

        $this->set(compact('category'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $category = $this->Categories->newEmptyEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $parentCategories = $this->Categories->ParentCategories->find('list', ['limit' => 200])->all();
        $products = $this->Categories->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('category', 'parentCategories', 'products'));
    }

    /**
     * Add Subcategories method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function sub()
    {
        $category = $this->Categories->newEmptyEntity();

        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $parentCategories = $this->Categories->find('list')->where(['Categories.parent_id IS' => null]);
        $products = $this->Categories->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('category', 'parentCategories', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Products'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $parentCategories = $this->Categories->find('list')->where(['Categories.parent_id IS' => null]);
        $products = $this->Categories->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('category', 'parentCategories', 'products'));
    }

    /**
     * Edit subcategories method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editsub($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Products'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $parentCategories = $this->Categories->find('list')->where(['Categories.parent_id IS' => null]);
        $products = $this->Categories->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('category', 'parentCategories', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function list($id = null)
    {
//        $this->loadModel('Categories');
        $category = $this->Categories->get($id, [
            'contain' => ['ParentCategories', 'Products', 'ChildCategories'],
        ]);
        $parentCategories = $this->Categories->find('list');
        $products = $this->Categories->Products->find()
            //->where(['Categories.parent_id IS'=>null]))
            ->contain(['ProductImages'])
            ->all()->toArray();
        $this->set(compact('category', 'parentCategories', 'products'));
    }
}
