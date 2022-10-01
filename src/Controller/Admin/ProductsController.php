<?php
declare(strict_types=1);

namespace App\Controller\Admin;

//use App\Controller\Wholesale\AppController;
//use function App\Controller\__;
use Cake\Controller\ComponentRegistry;
use Cake\Core\Configure;
use Cake\Database\Connection;
use Cake\Database\Driver;
use Cake\Database\Driver\Mysql;
use Cake\Event\EventManagerInterface;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use function __;
use const DS;
use const WWW_ROOT;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @property \App\Model\Table\CategoriesTable $Categories
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


        $sql = "SELECT a.*,b.description as img from products as a
left join product_images as b on a.id = b.product_id
LEFT JOIN categories_products as c on c.product_id = a.id
left join categories as d on d.id = c.category_id group by a.id ;";

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


    /**
     *
     */
    public function shopSearch()
    {
        $this->render('test');
        $ids = $this->request->getData('ids');
//        $this->response = $this->response->withType('application/json');
        $this->request->allowMethod(['get']);
//        return $this->response;
        echo 123;
        exit;
    }
}
