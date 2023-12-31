<?php
declare(strict_types=1);

namespace App\Controller\Admin;

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
    /**
     * @param EventInterface $event
     * @return \Cake\Http\Response|void|null
     */
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.
        $this->Authentication->addUnauthenticatedActions(['request','add']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $wholesaleRequests = $this->paginate($this->WholesaleRequests);

        $this->set(compact('wholesaleRequests'));
    }

    /**
     * View method
     *
     * @param string|null $id Wholesale Request id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wholesaleRequest = $this->WholesaleRequests->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('wholesaleRequest'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('WholesaleRequests');

        $wholesaleRequest = $this->WholesaleRequests->newEmptyEntity();
        if ($this->request->is('post')) {
            $wholesaleRequest = $this->WholesaleRequests->patchEntity($wholesaleRequest, $this->request->getData());
            //updating the status
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
                $mailer->deliver();

                //$this->redirect(['controller'=>'Users','action'=>'addWholesale',$wholesaleRequest->id]);
                $this->Flash->success(__('The wholesale request has been saved.'));

                return $this->redirect(['controller' => 'WholesaleRequests','action' => 'index','prefix' => 'Admin']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));
        }
        $this->set(compact('wholesaleRequest'));
    }

    /**
     * @param $id
     * @return \Cake\Http\Response|void|null
     */
    public function approve($id = null)
    {
        $wholesaleRequest = $this->WholesaleRequests->get($id, [
            'contain' => [],
        ]);

        $status = $wholesaleRequest->status;
        if (strcmp($status, 'Rejected') == 0) {
            $this->Flash->error(__('The request has been rejected'));

            return $this->redirect(['controller' => 'wholesaleRequests','action' => 'index']);
        } elseif (strcmp($status, 'Approved') == 0) {
            $this->Flash->error(__('The quote request has already been approved.'));

            return $this->redirect(['controller' => 'wholesaleRequests','action' => 'index']);
        } else {
            $wholesaleRequest->status = 'Approved';

            if ($this->WholesaleRequests->save($wholesaleRequest)) {
                $this->redirect(['controller' => 'Users', 'action' => 'addWholesale', $wholesaleRequest->id]);

                //send confirmation email if the wholesale account application has been successfully saved
                $mailerApprove = new Mailer('default');
                $mailerApprove
                    ->setEmailFormat('html')
                    ->setTo($wholesaleRequest->email)
                    //->setTo('contactreceiver@billgong.monash-ie.me')
                    ->setFrom('emailtestingfit3178@gmail.com')
                    ->setSubject('Your wholesale application has been approved')
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('wholesale_approve');

                $mailerApprove->setViewVars([
                    'firstname' => $wholesaleRequest->first_name,
                    'lastname' => $wholesaleRequest->last_name,
                    'business_name' => $wholesaleRequest->business_name,
                    'abn' => $wholesaleRequest->abn,
                    'phone' => $wholesaleRequest->phone,
                    'email' => $wholesaleRequest->email,
                ]);
                $this->Flash->success(__('The wholesale request has been approved.'));
                $mailerApprove->deliver();

                //write the wholesale id into session which will be used later when adding the user_id to the wholesale application
                $session = $this->request->getSession();
                $session->write('Wholesale.id', $id);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));

            $wholesaleRequest->status = 'Not Approved';
        }
    }

    /**
     * @param $id
     * @return \Cake\Http\Response|void|null
     */
    public function reject($id = null)
    {
        $wholesaleRequest = $this->WholesaleRequests->get($id, [
            'contain' => [],
        ]);

        //check the status before perform the reject action
        $status = $wholesaleRequest->status;
        if (strcmp($status, 'Rejected') == 0) {
            $this->Flash->error(__('The request has been rejected'));

            return $this->redirect(['controller' => 'wholesaleRequests','action' => 'index']);
        } elseif (strcmp($status, 'Approved') == 0) {
            $this->Flash->error(__('The quote request has already been approved.'));

            return $this->redirect(['controller' => 'wholesaleRequests','action' => 'index']);
        } else {
            $wholesaleRequest->status = 'Rejected';
            if ($this->WholesaleRequests->save($wholesaleRequest)) {
                $mailerReject = new Mailer('default');
                $mailerReject
                    ->setEmailFormat('html')
                    ->setTo($wholesaleRequest->email)
                    //->setTo('contactreceiver@billgong.monash-ie.me')
                    ->setFrom('emailtestingfit3178@gmail.com')
                    ->setSubject('Your wholesale application has been rejected')
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('wholesale_rejected');

                $mailerReject->setViewVars([
                    'firstname' => $wholesaleRequest->first_name,
                    'lastname' => $wholesaleRequest->last_name,
                ]);
                $mailerReject->deliver();

                $this->Flash->success(__('The wholesale request has been rejected.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));
        }
    }


    /**
     * @param $user_id
     * @return \Cake\Http\Response|null
     */
    public function addUser($user_id = null)
    {

        //read the wholesale id from the session and update the passed user_id
        $wholesale_id = $this->request->getSession()->read('Wholesale.id');
        $this->loadModel('WholesaleRequests');
        $wholesaleRequest = $this->WholesaleRequests->get($wholesale_id, [
            'contain' => [],
        ]);
        if ($user_id != null) {
            $wholesaleRequest->user_id = $user_id;
            $this->WholesaleRequests->save($wholesaleRequest);
        } else {
            $this->Flash->error(__('The user cannot be added.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wholesale Request id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wholesaleRequest = $this->WholesaleRequests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wholesaleRequest = $this->WholesaleRequests->patchEntity($wholesaleRequest, $this->request->getData());
            if ($this->WholesaleRequests->save($wholesaleRequest)) {
                $this->Flash->success(__('The wholesale request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));
        }
        $this->set(compact('wholesaleRequest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wholesale Request id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wholesaleRequest = $this->WholesaleRequests->get($id);
        if ($this->WholesaleRequests->delete($wholesaleRequest)) {
            $this->Flash->success(__('The wholesale request has been deleted.'));
        } else {
            $this->Flash->error(__('The wholesale request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
