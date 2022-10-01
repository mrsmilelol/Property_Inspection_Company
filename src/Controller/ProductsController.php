<?php
declare(strict_types=1);

namespace App\Controller;

//use function App\Controller\__;
//use const DS;
//use const WWW_ROOT;
use Cake\Controller\ComponentRegistry;
use Cake\Database\Connection;
use Cake\Database\Driver\Mysql;
use Cake\Event\EventInterface;
use Cake\Event\EventManagerInterface;
use Cake\Http\Response;
use Cake\Http\ServerRequest;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    private $conn;

    public function __construct(?ServerRequest $request = null, ?Response $response = null, ?string $name = null, ?EventManagerInterface $eventManager = null, ?ComponentRegistry $components = null)
    {
        parent::__construct($request, $response, $name, $eventManager, $components);
//        $driver = new Mysql([
//            'database' => 'chelseafurniture',
//            'username' => 'root',
//            'password' => 'root',
//        ]);
        $conn = new Connection([
            'driver' => Mysql::class,
        ]);
        $this->conn = $conn;
    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.
        $this->Authentication->addUnauthenticatedActions(['cart','detail', 'shop']);
    }

    public function initialize():void
    {
        parent::initialize();
        $this->loadComponent('Cart');
    }

    public function shop()
    {
//        $this->loadModel('ProductImages');
        $param = $_GET;
        $ids = $param['checks']??'';
        $price = $param['price']??'';
        if (!empty($price)){
            $price = str_replace('£','',$price);
            $price = str_replace('+','',$price);
            $price = explode('-',$price);
            $min_p = $price[0];
            $max_p = $price[1];
        }
        $order = $param['order']??'';
        $order_p = '';
        if($order){
            $order_arr = explode('_',$order);
            $order_p = $order_arr[0].' '.$order_arr[1];
        }
        $sql = "SELECT a.*,b.description as img from products as a
left join product_images as b on a.id = b.product_id
LEFT JOIN categories_products as c on c.product_id = a.id
left join categories as d on d.id = c.category_id group by a.id;";

        if (!empty($ids) && !empty($price) && $order_p){
            $sql = "SELECT a.*,b.description as img from products as a
left join product_images as b on a.id = b.product_id
LEFT JOIN categories_products as c on c.product_id = a.id
left join categories as d on d.id = c.category_id where d.id in (".$ids.") and a.price BETWEEN ".$min_p." and ".$max_p." group by a.id;";
        }else{
            if (!empty($ids)){
                $sql = "SELECT a.*,b.description as img from products as a
left join product_images as b on a.id = b.product_id
LEFT JOIN categories_products as c on c.product_id = a.id
left join categories as d on d.id = c.category_id where d.id in (".$ids.") group by a.id;";
            }

            if (!empty($price)){
                $sql = "SELECT a.*,b.description as img from products as a
left join product_images as b on a.id = b.product_id
LEFT JOIN categories_products as c on c.product_id = a.id
left join categories as d on d.id = c.category_id where a.price BETWEEN ".$min_p." and ".$max_p." group by a.id;";
            }
            if ($order_p){
                $sql = "SELECT a.*,b.description as img from products as a
left join product_images as b on a.id = b.product_id
LEFT JOIN categories_products as c on c.product_id = a.id
left join categories as d on d.id = c.category_id group by a.id order by ".$order_p;
            }

        }

        $products = $this->conn->execute($sql);
        $products = $products->fetchAll('assoc');
//        var_dump($products);
//        $products = $this->Products->find()
//            ->contain(['ProductImages'])
//            ->all()->toArray();
//        print_r($products);
        $this->loadModel('Categories');
        $class_list = $this->Categories->find()->all()->toArray();
        $new_list = array();
        if (!empty($class_list)){
            foreach ($class_list as $key=>$val){
                if (empty($val['parent_id'])){
                    $new_list[$val['id']]=['p_name'=>$val['description']];
                }
            }

            foreach ($new_list as $keys=>$vals){
                foreach ($class_list as $k=>$v){
                    if ($keys == $v['parent_id']){
                        $new_list[$keys]['child'][$v['id']]=$v['description'];
                    }
                }
            }

        }
        //$productImages = $this->ProductImages->find()->select(['product_id','description'])
//            ->distinct(['product_id'])->toArray();
        $this->set(compact('products','new_list','ids'));
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
