<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

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
        $this->Authentication->addUnauthenticatedActions(['list']);
    }

    public function list($id = null)
    {
//        $this->loadModel('Categories');
        $category = $this->Categories->get($id, [
            'contain' => ['ParentCategories', 'Products', 'ChildCategories'],
        ]);
        $order = $_GET['order']??'';
        $order_p = '';
        if($order){
            $order_arr = explode('_',$order);
            $order_p = $order_arr[0].' '.$order_arr[1];
        }
//        print_r($order_p);exit();
        $parentCategories = $this->Categories->find('list');
        $products = $this->Categories->Products->find()
            //->where(['Categories.parent_id IS'=>null]))
            ->contain(['ProductImages'])

            ->all()->toArray();

        $this->set(compact('category', 'parentCategories', 'products'));
    }
}
