<?php
declare(strict_types=1);

namespace App\Controller;

//use App\Controller\Wholesale\AppController;
use Cake\Event\EventInterface;
use Cake\Mailer\Mailer;
use function __;

/**
 * WholesaleRequests Controller
 *
 * @property \App\Model\Table\WholesaleRequestsTable $WholesaleRequests
 * @method \App\Model\Entity\WholesaleRequest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WholesaleRequestsController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.
        $this->Authentication->addUnauthenticatedActions(['request', 'add']);
    }

    public function request()
    {
        $this->loadModel('WholesaleRequests');

        $wholesaleRequest = $this->WholesaleRequests->newEmptyEntity();
        if ($this->request->is('post')) {
            $wholesaleRequest = $this->WholesaleRequests->patchEntity($wholesaleRequest, $this->request->getData());
            //updating the status


            if ($wholesaleRequest->email == null) {
                $this->Flash->error('Error, please enter a valid email');
                //return $this->redirect(['prefix'=>'Customer','controller'=>'WholesaleRequests','action' => 'request']);
            } else {
                $validate = $this->WholesaleRequests->Users->findByEmail($wholesaleRequest->email)->first();
                if ($validate != null) {
                    $this->Flash->error('Error, the email entered already has an associated account');
                    //return $this->redirect(['prefix'=>'Customer','controller'=>'WholesaleRequests','action' => 'request']);
                } else {
                    $wholesaleRequest->status = 'Not Approved';
                    if ($this->WholesaleRequests->save($wholesaleRequest)) {
                        $mailer = new Mailer('default');
                        $mailer
                            ->setEmailFormat('html')
                            ->setTo($wholesaleRequest->email)
                            //->setTo('contactreceiver@billgong.monash-ie.me')
                            ->setFrom('emailtestingfit3178@gmail.com')
                            ->setSubject('Your wholesale application has been sent for review')
                            ->viewBuilder()
                            ->disableAutoLayout()
                            ->setTemplate('wholesale_request');

                        $mailer->setViewVars([
                            'firstname' => $wholesaleRequest->first_name,
                            'lastname' => $wholesaleRequest->last_name,
                            'business_name' => $wholesaleRequest->business_name,
                            'abn' => $wholesaleRequest->abn,
                            'phone' => $wholesaleRequest->phone,
                            'email' => $wholesaleRequest->email,
                        ]);
                        $requestStatus = $mailer->deliver();
                        if ($requestStatus) {
                            $this->Flash->success('Your application has been sent for review');
                        } else {
                            $this->Flash->error('Error, unable to send email.');
                        }

                        //$this->redirect(['controller'=>'Users','action'=>'addWholesale',$wholesaleRequest->id]);
                        //$this->Flash->success(__('The wholesale request has been saved.'));

                        return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'main']);
                    }
                    $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));
                }
            }

            /*$wholesaleRequest->status = "Not Approved";
            if ($this->WholesaleRequests->save($wholesaleRequest)) {

                $mailer = new Mailer('default');
                $mailer
                    ->setEmailFormat('html')
                    ->setTo($wholesaleRequest->email)
                    //->setTo('contactreceiver@billgong.monash-ie.me')
                    ->setFrom('emailtestingfit3178@gmail.com')
                    ->setSubject('Your wholesale application has been sent for review')
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('wholesale_request');

                $mailer->setViewVars([
                    'firstname' => $wholesaleRequest->first_name,
                    'lastname' => $wholesaleRequest->last_name,
                    'business_name' => $wholesaleRequest->business_name,
                    'abn' => $wholesaleRequest->abn,
                    'phone' => $wholesaleRequest->phone,
                    'email'=> $wholesaleRequest->email
                ]);
                $requestStatus = $mailer->deliver();
                if ($requestStatus) {
                    $this->Flash->success('Your application has been sent for review');
                } else {
                    $this->Flash->error('Error, unable to send email.');
                }

                //$this->redirect(['controller'=>'Users','action'=>'addWholesale',$wholesaleRequest->id]);
                //$this->Flash->success(__('The wholesale request has been saved.'));

                return $this->redirect(['prefix'=>'Customer','controller'=>'Pages','action' => 'display','main']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));*/
        }
        $this->set(compact('wholesaleRequest'));
    }
}
