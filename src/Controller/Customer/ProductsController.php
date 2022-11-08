<?php
declare(strict_types=1);

namespace App\Controller\Customer;

//use function App\Controller\__;
//use const DS;
//use const WWW_ROOT;

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
        $products = $this->paginate($this->Products);}


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
            'contain' => ['OrdersProducts', 'ProductImages', 'Orders','Categories'],
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
                'ProductImages'],
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

    public function shop($id = null)
    {

        $param = $_GET;
        $sel = $param['sel']??'99';
//        $this->loadModel('ProductImages');
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
        switch ($sel){
            case 1:
                $query = $this->Products->find('all')->orderAsc('sale_price');
                break;
            case 2:
                $query = $this->Products->find('all')->orderDesc('sale_price');
                break;
            case 3:
                $query = $this->Products->find('all')->orderAsc('name');
                break;
            case 4:
                $query = $this->Products->find('all')->orderDesc('name');
                break;
            default:
                $query = $this->Products->find('all')->where($brandsql)->where($stylesql)
                    ->where($meterialsql)->where($colorsql);
        }

        $products = $query->contain(['ProductImages']);
        if($id == 1){
            $products = $products->where(['units_in_stock !=' => 0])->toArray();
        }
        elseif($id == 2){
            $products = $products->where(['sale_price IS NOT' => null])->toArray();
        }
        else {
            $products = $products->toArray();
        }


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
        //Loading the Product Images Model
        $this->loadModel('ProductImages');
        //Finding the product images by their product_id
        $productImages = $this->ProductImages->findByProductId($id)->all()->toArray();
        //Getting the product object by finding it from its ID
        $product = $this->Products->get($id, [
            'contain' => ['Orders', 'OrdersProducts', 'Categories', 'ProductImages'],
        ]);
        //Passing the variables to the template
        $this->set(compact('product','productImages'));
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
        //Getting the product object by its ID
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Add the product into the cart
     * @return \Cake\Http\Response|null
     */
    public function addToCart(){
        //Check if the "Submit" button was invoked
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $id = $data['id'];
            $quantity = 1;
            //Getting the product object by its ID
            $product = $this->Products->get($id, [
                'contain' => []
            ]);
            //Check if the object is empty or not
            if(empty($product)) {
                $this->Flash->error('Invalid request');
            } else {
                //Add the product to Shop session
                $this->Cart->add($id, $quantity);
                $this->Flash->success($product->name . ' has been added to the shopping cart');
            }

            return $this->redirect($this->referer());
        } else {
            return $this->redirect(['action' => 'shop']);
        }
    }

    /**
     * Remove the product from the cart
     * @param $id
     * @return \Cake\Http\Response|null
     */
    public function removeProduct($id = null) {
        //Removing the product from the Shop session
        $product = $this->Cart->remove($id);
        if(!empty($product)) {
            $this->Flash->error($product['name'] . ' was removed from your shopping cart');
        }
        return $this->redirect(['action' => 'cart']);
    }

////////////////////////////////////////////////////////////////////////////////
    /**
     * Calling the shopping cart
     * @return void
     */
    public function cart()
    {
        $orderItems = $this->Cart->getcart();
        $this->set(compact('orderItems'));
    }

////////////////////////////////////////////////////////////////////////////////
    /**
     * Updating the whole shopping cart
     * @return \Cake\Http\Response|null
     */
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
    /**
     * Clearing the cart
     * @return \Cake\Http\Response|null
     */
    public function clear()
    {
        $this->Cart->clear();
        $this->Flash->success('The shopping cart is cleared');
        return $this->redirect(['action' => 'index']);
    }
}
