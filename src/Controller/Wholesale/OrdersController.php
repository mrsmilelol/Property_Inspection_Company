<?php
declare(strict_types=1);

namespace App\Controller\Wholesale;

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

        $OrderProducts = $this->fetchTable('OrdersProducts')->find('all')->where(['OrdersProducts.order_id' => $order->id])->toArray();

        foreach ($order->products as $checkProduct){
            foreach ($OrderProducts as $orderProduct) {
                if ($orderProduct->product_id === $checkProduct->id) {
                    $checkProduct->qty = $orderProduct->quantity;
                }
            }
        }

        $this->set(compact('order', 'OrderProducts'));
    }
}
