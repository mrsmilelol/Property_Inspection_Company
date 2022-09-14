<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
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
