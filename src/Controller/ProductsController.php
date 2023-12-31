<?php
declare(strict_types=1);

namespace App\Controller;

//use function App\Controller\__;
//use const DS;
//use const WWW_ROOT;
use Cake\Event\EventInterface;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * @param EventInterface $event
     * @return \Cake\Http\Response|void|null
     */
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.
        $this->Authentication->addUnauthenticatedActions(['cart', 'detail', 'shop', 'addToCart', 'removeProduct', 'changeQty']);
    }

    /**
     * @return void
     * @throws \Exception
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Cart');
    }

    /**
     * @param $id
     * @return void
     */
    public function shop($id = null)
    {

        $param = $_GET;
        $sel = $param['sel'] ?? '99';
        $brandsql = '';
        $stylesql = '';
        $meterialsql = '';
        $colorsql = '';
        if (isset($param['brand']) and $param['brand'] != '') {
            $brandsql = ' brand="' . $param['brand'] . '"';
        }
        if (isset($param['style']) and $param['style'] != '') {
            $stylesql = ' style="' . $param['style'] . '"';
        }
        if (isset($param['material']) and $param['material'] != '') {
            $meterialsql = ' material="' . $param['material'] . '"';
        }
        if (isset($param['colour']) and $param['colour'] != '') {
            $colorsql = ' colour="' . $param['colour'] . '"';
        }
        switch ($sel) {
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
        if ($id == 1) {
            $products = $products->where(['units_in_stock !=' => 0])->toArray();
        } elseif ($id == 2) {
            $products = $products->where(['sale_price IS NOT' => null])->toArray();
        } else {
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
        $this->set(compact('product', 'productImages'));
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
    public function addToCart()
    {
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
            if (empty($product)) {
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
     * @param $id
     * @return \Cake\Http\Response|null
     */
    public function removeProduct($id = null)
    {
        //Removing the product from the Shop session
        $product = $this->Cart->remove($id);
        if (!empty($product)) {
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
        //Retrieving the data from Shop session
        $orderItems = $this->Cart->getcart();
        //Retrieving the data from Auth session
        $user = $this->request->getSession()->read('Auth');
        $this->set(compact('orderItems', 'user'));
    }

////////////////////////////////////////////////////////////////////////////////

    /**
     * Updating the whole shopping cart
     * @return \Cake\Http\Response|null
     */
    public function cartupdate()
    {
        if ($this->request->is('post')) {
            foreach ($this->request->getData() as $key => $value) {
                $a = explode('-', $key);
                $b = explode('_', $a[1]);
                $value = intval($value);
                $id = intval($b[0]);
                $this->Cart->updateQty($id, $value);
            }
            return $this->redirect($this->referer());
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
        //Clearing the Shop session
        $this->Cart->clear();
        $this->Flash->success('The shopping cart is cleared');
        return $this->redirect(['action' => 'index']);
    }

    /**
     * @param $change
     * @param $id
     * @param $qty
     * @return \Cake\Http\Response|null
     */
    public function changeQty($change, $id, $qty)
    {
        $value = intval($qty);
        $ID = intval($id);
        $this->Cart->qtyChange($ID, $value, $change);

        return $this->redirect(['action' => 'cart']);
    }

}
