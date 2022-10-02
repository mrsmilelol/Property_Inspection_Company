<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CancelledOrders Controller
 *
 * @property \App\Model\Table\CancelledOrdersTable $CancelledOrders
 * @method \App\Model\Entity\CancelledOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CancelledOrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders'],
        ];
        $cancelledOrders = $this->paginate($this->CancelledOrders);

        $this->set(compact('cancelledOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Cancelled Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cancelledOrder = $this->CancelledOrders->get($id, [
            'contain' => ['Orders'],
        ]);

        $this->set(compact('cancelledOrder'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cancelledOrder = $this->CancelledOrders->newEmptyEntity();
        if ($this->request->is('post')) {
            $cancelledOrder = $this->CancelledOrders->patchEntity($cancelledOrder, $this->request->getData());
            if ($this->CancelledOrders->save($cancelledOrder)) {
                $this->Flash->success(__('The cancelled order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cancelled order could not be saved. Please, try again.'));
        }
        $orders = $this->CancelledOrders->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('cancelledOrder', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cancelled Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cancelledOrder = $this->CancelledOrders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cancelledOrder = $this->CancelledOrders->patchEntity($cancelledOrder, $this->request->getData());
            if ($this->CancelledOrders->save($cancelledOrder)) {
                $this->Flash->success(__('The cancelled order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cancelled order could not be saved. Please, try again.'));
        }
        $orders = $this->CancelledOrders->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('cancelledOrder', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cancelled Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cancelledOrder = $this->CancelledOrders->get($id);
        if ($this->CancelledOrders->delete($cancelledOrder)) {
            $this->Flash->success(__('The cancelled order has been deleted.'));
        } else {
            $this->Flash->error(__('The cancelled order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
