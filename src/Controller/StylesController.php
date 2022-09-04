<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Styles Controller
 *
 * @property \App\Model\Table\StylesTable $Styles
 * @method \App\Model\Entity\Style[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StylesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $styles = $this->paginate($this->Styles);

        $this->set(compact('styles'));
    }

    /**
     * View method
     *
     * @param string|null $id Style id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $style = $this->Styles->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('style'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $style = $this->Styles->newEmptyEntity();
        if ($this->request->is('post')) {
            $style = $this->Styles->patchEntity($style, $this->request->getData());
            if ($this->Styles->save($style)) {
                $this->Flash->success(__('The style has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The style could not be saved. Please, try again.'));
        }
        $this->set(compact('style'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Style id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $style = $this->Styles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $style = $this->Styles->patchEntity($style, $this->request->getData());
            if ($this->Styles->save($style)) {
                $this->Flash->success(__('The style has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The style could not be saved. Please, try again.'));
        }
        $this->set(compact('style'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Style id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $style = $this->Styles->get($id);
        if ($this->Styles->delete($style)) {
            $this->Flash->success(__('The style has been deleted.'));
        } else {
            $this->Flash->error(__('The style could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
