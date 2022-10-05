<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;

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
        $user = $this->fetchTable('Users')->get($order->user_id);
        $status = $order->status;
        if (strcmp($status, "Cancel order requested")==0) {
            $this->Flash->error(__('You have already submitted cancel order request'));
            return $this->redirect(['prefix'=>'Admin','action'=>'index','controller'=>'Orders']);
        }
        elseif (strcmp($status, "Order cancelled")==0 ){
            $this->Flash->error(__('The cancel order request has already been approved.'));
            return $this->redirect(['prefix'=>'Admin','action'=>'index','controller'=>'Orders']);
        }
        elseif (strcmp($status, "Cancel request rejected")==0 ){
            $this->Flash->error(__('Your cancel order request has been rejected, please contact the store for any questions.'));
            return $this->redirect(['prefix'=>'Admin','action'=>'index','controller'=>'Orders']);
        } else {
            if ($this->request->is('post')) {
                $cancelledOrder = $this->CancelledOrders->patchEntity($cancelledOrder, $this->request->getData());
                $cancelledOrder->status = "Cancel order requested";
                $cancelledOrder->order_id = $order->id;
                $order->status = $cancelledOrder->status;
                if ($this->CancelledOrders->save($cancelledOrder) && $this->CancelledOrders->Orders->save($order)) {

                    //send the email to the user eamil address
                    $mailer = new Mailer('default');
                    $mailer
                        ->setEmailFormat('html')
                        ->setTo($user->email)
                        //->setTo('contactreceiver@billgong.monash-ie.me')
                        ->setFrom('emailtestingfit3178@gmail.com')
                        ->setSubject('Your cancel order request has been submitted')
                        ->viewBuilder()
                        ->disableAutoLayout()
                        ->setTemplate('order_cancel');

                    $mailer->setViewVars([
                        'firstname' => $user->firstname,
                        'id' => $order->id
                    ]);
                    $requestStatus = $mailer->deliver();
                    if ($requestStatus) {
                        $this->Flash->success('Your request has been sent for review');
                    } else {
                        $this->Flash->error('Error, unable to send email.');
                    }
                    $this->Flash->success(__('The cancelled order request has been saved.'));

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
