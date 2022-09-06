<?php
declare(strict_types=1);

namespace App\Controller\Admin;

//use App\Controller\Wholesale\AppController;
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
            $wholesaleRequest->status = "Not Approved";
            if ($this->WholesaleRequests->save($wholesaleRequest)) {

                //$this->redirect(['controller'=>'Users','action'=>'addWholesale',$wholesaleRequest->id]);
                $this->Flash->success(__('The wholesale request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));
        }
        $this->set(compact('wholesaleRequest'));
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

                //$this->redirect(['controller'=>'Users','action'=>'addWholesale',$wholesaleRequest->id]);
                $this->Flash->success(__('The wholesale request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));
        }
        $this->set(compact('wholesaleRequest'));
    }

    public function approve($id=null){
        $wholesaleRequest = $this->WholesaleRequests->get($id, [
            'contain' => [],
        ]);

        $status = $wholesaleRequest->status;
        if (strcmp($status, "Rejected")==0) {
            $this->Flash->error(__('The request has been rejected'));
            return $this->redirect(['controller'=>'wholesaleRequests','action' => 'index']);
        }
        elseif (strcmp($status, "Approved")==0 ){
            $this->Flash->error(__('The quote request has already been approved.'));
            return $this->redirect(['controller'=>'wholesaleRequests','action' => 'index']);;
        }
        else {
            $wholesaleRequest->status = "Approved";

            if ($this->WholesaleRequests->save($wholesaleRequest)) {

                $this->redirect(['controller' => 'Users', 'action' => 'addWholesale', $wholesaleRequest->id]);
                $this->Flash->success(__('The wholesale request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));

            $wholesaleRequest->status = "Not Approved";
        }

    }

    public function reject($id=null){
        $wholesaleRequest = $this->WholesaleRequests->get($id, [
            'contain' => [],
        ]);
        //$this->validate($wholesaleRequest->status);
        $wholesaleRequest->status = "Rejected";
        if ($this->WholesaleRequests->save($wholesaleRequest)) {

            $this->Flash->success(__('The wholesale request has been rejected.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));


    }

    /**
     * private validate method to validate the status before approve the quote
     * @param $status
     * @return \Cake\Http\Response|void|null renders view if validate unsuccessful.
     */
    private function validate($status) {
        if (strcmp($status, "Rejected")==0) {
            $this->Flash->error(__('The request has been rejected'));
            return $this->redirect(['controller'=>'wholesaleRequests','action' => 'index']);
        }
        elseif (strcmp($status, "Approved")==0 ){
            $this->Flash->error(__('The quote request has already been approved.'));
            return;
        }

    }

    public function addUser($id=null){
        $this->loadModel('WholesaleRequests');
        $wholesaleRequest = $this->WholesaleRequests->get($id, [
            'contain' => [],
        ]);
        $user_id = $this->request->getSession()->read('User.id');
        $wholesaleRequest->user_id = $user_id;
        $this->WholesaleRequests->save($wholesaleRequest);

        return $this->redirect(['action'=>'index']);
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
