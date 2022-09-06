<?php
declare(strict_types=1);

namespace App\Controller\Wholesale;

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
            'contain' => ['OrdersProducts', 'ProductImages', 'ProductReviews', 'ShoppingSessions', 'Orders','Categories'],
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
                'ProductImages', 'ProductReviews', 'ShoppingSessions'],
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
            'contain' => ['Orders', 'OrdersProducts', 'Categories', 'ProductImages', 'ProductReviews', 'ShoppingSessions'],
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
}
