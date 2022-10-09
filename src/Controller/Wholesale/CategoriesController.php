<?php
declare(strict_types=1);

namespace App\Controller\Wholesale;

use App\Controller\Wholesale\AppController;
use function App\Controller\__;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentCategories'],
            'limit' => 200
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
        $param = $_GET;
        $sel = $param['sel']??'99';
        $brandsql = '';
        $stylesql = '';
        $meterialsql = '';
        $colorsql = '';
        if (isset($param['brand']) and $param['brand']!=''){
            $brandsql = ' brand="'.$param['brand'].'"';
        }
        if (isset($param['style']) and $param['style']!=''){
            $stylesql = ' style="'.$param['style'].'"';
        }
        if (isset($param['material']) and $param['material']!=''){
            $meterialsql = ' material="'.$param['material'].'"';
        }
        if (isset($param['colour']) and $param['colour']!=''){
            $colorsql = ' colour="'.$param['colour'].'"';
        }
//        $this->loadModel('Categories');
        $category = $this->Categories->get($id, [
            'contain' => ['ParentCategories', 'Products', 'ChildCategories'],
        ]);
        $parentCategories = $this->Categories->find('list');
        $products = $this->Categories->Products->find()
//            ->where(['Categories.id'=>$id])
            ->where($brandsql)
            ->where($stylesql)
            ->where($meterialsql)
            ->where($colorsql)
            ->contain(['ProductImages'])
            ->find('all')->toArray();

        switch ($sel){
            case 1:
                $price = array();
                foreach ($category->products as $product){
                    $price[]=$product['sale_price'];
                }
                array_multisort($price,SORT_ASC,$category->products);
                break;
            case 2:
                $price = array();
                foreach ($category->products as $product){
                    $price[]=$product['sale_price'];
                }
                array_multisort($price,SORT_DESC,$category->products);
                break;
            case 3:
                $price = array();
                foreach ($category->products as $product){
                    $price[]=$product['name'];
                }
                array_multisort($price,SORT_ASC,$category->products);
                break;
            case 4:
                $price = array();
                foreach ($category->products as $product){
                    $price[]=$product['name'];
                }
                array_multisort($price,SORT_DESC,$category->products);
                break;
            default:

        }



        $this->set(compact('category', 'parentCategories', 'products'));
    }
}
