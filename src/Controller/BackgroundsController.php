<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Backgrounds Controller
 *
 * @property \App\Model\Table\BackgroundsTable $Backgrounds
 */
class BackgroundsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $backgrounds = $this->paginate($this->Backgrounds);

        $this->set(compact('backgrounds'));
        $this->set('_serialize', ['backgrounds']);
    }

    /**
     * View method
     *
     * @param string|null $id Background id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $background = $this->Backgrounds->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('background', $background);
        $this->set('_serialize', ['background']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $background = $this->Backgrounds->newEntity();
        if ($this->request->is('post')) {
            $background = $this->Backgrounds->patchEntity($background, $this->request->data);
            if ($this->Backgrounds->save($background)) {
                $this->Flash->success(__('Los antecedentes han sido guardados.'));

                return $this->redirect(['controller'=>'Lifestyles','action' => 'add']);
            } else {
                $this->Flash->error(__('Los antecedentes no pudieron ser guardados. Intente nuevamente.'));
            }
        }
        $users = $this->Backgrounds->Users->find('list', ['limit' => 200]);
        $this->set(compact('background', 'users'));
        $this->set('_serialize', ['background']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Background id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $background = $this->Backgrounds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $background = $this->Backgrounds->patchEntity($background, $this->request->data);
            if ($this->Backgrounds->save($background)) {
                $this->Flash->success(__('Los antecedentes han sido guardados.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Los antecedentes no pudieron ser guardados. Intente nuevamente.'));
            }
        }
        $users = $this->Backgrounds->Users->find('list', ['limit' => 200]);
        $this->set(compact('background', 'users'));
        $this->set('_serialize', ['background']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Background id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $background = $this->Backgrounds->get($id);
        if ($this->Backgrounds->delete($background)) {
            $this->Flash->success(__('Los antecedentes han sido borrados.'));
        } else {
            $this->Flash->error(__('Los antecendentes no han sido borrados. Intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
