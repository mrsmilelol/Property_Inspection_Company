<?php
declare(strict_types=1);

namespace App\Controller\Admin;

//use App\Controller\Wholesale\AppController;
//use function App\Controller\__;
use function __;
use const DS;
use const WWW_ROOT;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
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
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('ProductImages');
        $productImages = $this->ProductImages->findByProductId($id)->all()->toArray();

        $product = $this->Products->get($id, [
            'contain' => ['OrdersProducts', 'ProductImages', 'ProductReviews', 'Orders', 'Categories'],
        ]);

        $this->set(compact('product','productImages'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $this->loadModel('ProductImages');
        $product = $this->Products->newEmptyEntity();
        $categories = $this->Products->Categories->find('list', ['limit' => 200])->all();
        //$categories = $this->Products->Categories->find('list', ['conditions'=>['Categories.parent_id IS' => null],'limit' => 200])->all();
        //$subcategories = $this->Products->Categories->find('list', ['conditions'=>['Categories.parent_id IS NOT' => null],'limit' => 200])->all();
        /*$categories = $this->Categories->find('all',['conditions' => ['Categories.parent_id IS' => null]])->toArray();
        $subcategories = $this->Categories->find('all',['conditions' => ['Categories.parent_id IS NOT' => null]])->toArray();
        foreach ($categories as $category) :
            foreach ($subcategories as $subcategory) :
                if ($category->id == $subcategory->parent_id) :
                     $displayCategory[]= $category['description'] . ' ' . $subcategory['description'];
                endif;
            endforeach;
        endforeach;*/
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                $images = $this->request->getData('image_file');
                foreach ($images as $image) {
                    $fileName = $image->getClientFilename();
                    if (!empty($fileName)) {
                        $targetPath = WWW_ROOT . 'img' . DS . $fileName;
                        $productImage = $this->ProductImages->newEmptyEntity();
                        $image->moveTo($targetPath);
                        $productImage->product_id = $product->id;
                        $productImage->description = $fileName;
                        $this->ProductImages->save($productImage);
                    }
                }

                    return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
//        $categories = $this->Products->ProductCategories->find('list', ['limit' => 200])->all();
        $this->set(compact('product', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('ProductImages');
        $product = $this->Products->get($id, [
            'contain' => ['Orders', 'Categories', 'OrdersProducts',
                'ProductImages', 'ProductReviews'],
        ]);
        $productImages = $this->Products->get($id, [
            'contain' => ['ProductImages']])->toArray();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                $images = $this->request->getData('image_file');
                foreach ($images as $image) {
                    $fileName = $image->getClientFilename();
                    if (!empty($fileName)) {
                        $targetPath = WWW_ROOT . 'img' . DS . $fileName;
                        $productImage = $this->ProductImages->newEmptyEntity();
                        $image->moveTo($targetPath);
                        $productImage->product_id = $product->id;
                        $productImage->description = $fileName;
                        $this->ProductImages->save($productImage);
                    }
                }

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('product','categories','productImages'));
    }

    public function shop()
    {
//        $this->loadModel('ProductImages');
        $products = $this->Products->find()
            ->contain(['ProductImages'])
            ->all()->toArray();
        //$productImages = $this->ProductImages->find()->select(['product_id','description'])
//            ->distinct(['product_id'])->toArray();
        $this->set(compact('products'));
    }

    /**
     * Details method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function detail($id = null)
    {
        $this->loadModel('ProductImages');
        $productImages = $this->ProductImages->findByProductId($id)->all()->toArray();

        $product = $this->Products->get($id, [
            'contain' => ['Orders', 'OrdersProducts', 'Categories', 'ProductImages', 'ProductReviews'],
        ]);

        $shop = $this->Cart->getcart();

        $this->set(compact('product','productImages','shop'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function addToCart(){
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $id = $data['id'];
            $quantity = 1;

            $product = $this->Products->get($id, [
                'contain' => []
            ]);
            if(empty($product)) {
                $this->Flash->error('Invalid request');
            } else {
                $this->Cart->add($id, $quantity);
                $this->Flash->success($product->name . ' has been added to the shopping cart');
            }

            return $this->redirect($this->referer());
        } else {
            return $this->redirect(['action' => 'shop']);
        }
    }

    public function removeProduct($id = null) {
        $product = $this->Cart->remove($id);
        if(!empty($product)) {
            $this->Flash->error($product['name'] . ' was removed from your shopping cart');
        }
        return $this->redirect(['action' => 'cart']);
    }

////////////////////////////////////////////////////////////////////////////////

    public function cart()
    {
        $orderItems = $this->Cart->getcart();
        $this->set(compact('orderItems'));
    }

////////////////////////////////////////////////////////////////////////////////

    public function cartupdate() {
        if ($this->request->is('post')) {
            foreach($this->request->getData() as $key => $value) {
                $a = explode('-', $key);
                $b = explode('_', $a[1]);
                $this->Cart->add($b[0], $value, $b[1]);
                $this->Cart->cart();
            }
        }
        return $this->redirect(['action' => 'cart']);
    }

////////////////////////////////////////////////////////////////////////////////

    public function itemupdate() {
        if ($this->request->is('ajax')) {
            $id = $this->request->data['id'];
            $quantity = isset($this->request->data['quantity']) ? $this->request->data['quantity'] : 1;
            if(isset($this->request->data['mods']) && ($this->request->data['mods'] > 0)) {
                $productmodId = $this->request->data['mods'];
            } else {
                $productmodId = 0;
            }
            $product = $this->Cart->add($id, $quantity, $productmodId);
        }
        $cart = $this->Cart->getcart();
        echo json_encode($cart);
        die;
    }

////////////////////////////////////////////////////////////////////////////////

    public function clear()
    {
        $this->Cart->clear();
        $this->Flash->success('The shopping cart is cleared');
        return $this->redirect(['action' => 'index']);
    }

}
