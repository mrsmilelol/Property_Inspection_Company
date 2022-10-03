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



    public function cancel($id=null)
    {
        $cancelledOrder = $this->CancelledOrders->newEmptyEntity();
        $order = $this->CancelledOrders->Orders->get($id, [
            'contain' => [],
        ]);
        $status = $order->status;
        if (strcmp($status, "Cancel order requested")==0) {
            $this->Flash->error(__('You have already submitted cancel order request'));
            return $this->redirect(['prefix'=>'Admin','action'=>'index','controller'=>'Orders']);
        }
        elseif (strcmp($status, "Order cancelled")==0 ){
            $this->Flash->error(__('The cancel order request has already been approved.'));
            return $this->redirect(['prefix'=>'Admin','action'=>'index','controller'=>'Orders']);
        }
        elseif (strcmp($status, "Cancel order rejected")==0 ){
            $this->Flash->error(__('Your cancel order request has been rejected, please contact the store for any questions.'));
            return $this->redirect(['prefix'=>'Admin','action'=>'index','controller'=>'Orders']);
        } else {
            if ($this->request->is('post')) {
                $cancelledOrder = $this->CancelledOrders->patchEntity($cancelledOrder, $this->request->getData());
                $cancelledOrder->status = "Cancel order requested";
                $cancelledOrder->order_id = $order->id;
                $order->status = $cancelledOrder->status;
                if ($this->CancelledOrders->save($cancelledOrder) && $this->CancelledOrders->Orders->save($order)) {
                    $this->Flash->success(__('The cancelled order has been saved.'));

                    return $this->redirect(['action' => 'index','prefix'=>'Admin']);
                }
                $this->Flash->error(__('The cancelled order could not be saved. Please, try again.'));
            }
        }
        /*debug($cancelledOrder);
        exit;*/

        //$orders = $this->CancelledOrders->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('cancelledOrder', 'order'));
    }




}
