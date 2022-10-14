<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Mailer\Mailer;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Users', 'Products', 'CancelledOrders', 'Payments'],
        ]);

        $this->set(compact('order'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEmptyEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $users = $this->Orders->Users->find('list', ['limit' => 200])->all();
        $products = $this->Orders->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('order', 'users', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Products'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $users = $this->Orders->Users->find('list', ['limit' => 200])->all();
        $products = $this->Orders->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('order', 'users', 'products'));
    }

    /**
     * Cancel method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful cancel, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function cancel($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        //get the order by primary key
        $order = $this->Orders->get($id);
        $user = $this->fetchTable('Users')->get($order->user_id);

        //check the order status before perform action
        $status = $order->status;
        if (strcmp($status, 'Submitted') == 0 || strcmp($status, 'Order is placed')) {
            $order->status = 'Order cancelled';
            if ($this->Orders->save($order)) {
                //send the email to the user eamil address
                $mailer = new Mailer('default');
                $mailer
                    ->setEmailFormat('html')
                    ->setTo($user->email)
                    //->setTo('contactreceiver@billgong.monash-ie.me')
                    ->setFrom('emailtestingfit3178@gmail.com')
                    ->setSubject('Your order has been cancelled by chelsea furniture')
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('order_cancel_admin');

                $mailer->setViewVars([
                    'firstname' => $user->firstname,
                    'id' => $order->id,
                ]);
                $requestStatus = $mailer->deliver();
                if ($requestStatus) {
                    $this->Flash->success('An email has been sent to the customer regarding the order status');
                } else {
                    $this->Flash->error('Error, unable to send email.');
                }
                $this->Flash->success(__('The order has been cancelled.'));
            } else {
                $this->Flash->error(__('The order could not be cancelled. Please, try again.'));
            }
        } else {
            $this->Flash->error(__('The order has already been processed, please check the order status'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
