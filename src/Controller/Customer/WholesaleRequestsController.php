<?php
declare(strict_types=1);

namespace App\Controller\Customer;

//use App\Controller\Wholesale\AppController;
use Cake\Event\EventInterface;
use function __;
use Cake\Mailer\Mailer;
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
        $this->Authentication->addUnauthenticatedActions(['request','add']);
    }





    public function request()
    {
        $this->loadModel('WholesaleRequests');

        $wholesaleRequest = $this->WholesaleRequests->newEmptyEntity();
        if ($this->request->is('post')) {
            $wholesaleRequest = $this->WholesaleRequests->patchEntity($wholesaleRequest, $this->request->getData());
            //updating the status
            $wholesaleRequest->status = "Not Approved";
            if ($this->WholesaleRequests->save($wholesaleRequest)) {

                $mailer = new Mailer('default');
                $mailer
                    ->setEmailFormat('html')
                    ->setTo($wholesaleRequest->email)
                    //->setTo('contactreceiver@billgong.monash-ie.me')
                    ->setFrom('website@monash.edu')
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
                $mailer->deliver();

                //$this->redirect(['controller'=>'Users','action'=>'addWholesale',$wholesaleRequest->id]);
                $this->Flash->success(__('The wholesale request has been saved.'));

                return $this->redirect(['prefix'=>'Customer','controller'=>'Pages','action' => 'display','main']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));
        }
        $this->set(compact('wholesaleRequest'));
    }


}
