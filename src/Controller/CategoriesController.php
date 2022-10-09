<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
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
