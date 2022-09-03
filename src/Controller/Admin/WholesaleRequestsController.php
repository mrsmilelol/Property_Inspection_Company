<?php
declare(strict_types=1);

namespace App\Controller\Admin;


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

                $this->redirect(['controller'=>'Users','action'=>'addWholesale',$wholesaleRequest->id]);
                $this->Flash->success(__('The wholesale request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesale request could not be saved. Please, try again.'));
        }
        $this->set(compact('wholesaleRequest'));
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
