<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Wholesale\AppController;
use function App\Controller\__;

/**
 * ProductReviews Controller
 *
 * @property \App\Model\Table\ProductReviewsTable $ProductReviews
 * @method \App\Model\Entity\ProductReview[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductReviewsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Products'],
        ];
        $productReviews = $this->paginate($this->ProductReviews);

        $this->set(compact('productReviews'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Review id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productReview = $this->ProductReviews->get($id, [
            'contain' => ['Users', 'Products'],
        ]);

        $this->set(compact('productReview'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productReview = $this->ProductReviews->newEmptyEntity();
        if ($this->request->is('post')) {
            $productReview = $this->ProductReviews->patchEntity($productReview, $this->request->getData());
            if ($this->ProductReviews->save($productReview)) {
                $this->Flash->success(__('The product review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product review could not be saved. Please, try again.'));
        }
        $users = $this->ProductReviews->Users->find('list', ['limit' => 200])->all();
        $products = $this->ProductReviews->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productReview', 'users', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Review id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productReview = $this->ProductReviews->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productReview = $this->ProductReviews->patchEntity($productReview, $this->request->getData());
            if ($this->ProductReviews->save($productReview)) {
                $this->Flash->success(__('The product review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product review could not be saved. Please, try again.'));
        }
        $users = $this->ProductReviews->Users->find('list', ['limit' => 200])->all();
        $products = $this->ProductReviews->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productReview', 'users', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Review id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productReview = $this->ProductReviews->get($id);
        if ($this->ProductReviews->delete($productReview)) {
            $this->Flash->success(__('The product review has been deleted.'));
        } else {
            $this->Flash->error(__('The product review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
