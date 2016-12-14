<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lifestyles Controller
 *
 * @property \App\Model\Table\LifestylesTable $Lifestyles
 */
class LifestylesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    /*public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $lifestyles = $this->paginate($this->Lifestyles);

        $this->set(compact('lifestyles'));
        $this->set('_serialize', ['lifestyles']);
    }*/

    /**
     * View method
     *
     * @param string|null $id Lifestyle id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lifestyle = $this->Lifestyles->find()
      ->hydrate(false)
      ->andWhere(['Lifestyles.user_id'=>$id]);
      $lifestyle = $lifestyle->toArray();
      $id = $lifestyle[0]['id'];
      $lifestyle = $this->Lifestyles->get($id,[
        'contain'=>['Users']
      ]);
      $this->set('lifestyle', $lifestyle);
      $this->set('_serialize', ['lifestyle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id_user = null)
    {
        $lifestyle = $this->Lifestyles->newEntity();
        if ($this->request->is('post')) {
            $lifestyle = $this->Lifestyles->patchEntity($lifestyle, $this->request->data);
            $lifestyle ['user_id'] = $id_user;
            if ($this->Lifestyles->save($lifestyle)) {
                $this->Flash->success(__('El estilo de vida ha sido guardado.'));

                return $this->redirect(['controller'=>'AnthropometricsData','action' => 'add',$lifestyle['user_id']]);
            } else {
                $this->Flash->error(__('El estilo de vida no pudo ser guardado. Intente nuevamente.'));
            }
        }
        $users = $this->Lifestyles->Users->find('list', ['limit' => 200]);
        $this->set(compact('lifestyle', 'users'));
        $this->set('_serialize', ['lifestyle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lifestyle id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lifestyle = $this->Lifestyles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lifestyle = $this->Lifestyles->patchEntity($lifestyle, $this->request->data);
            if ($this->Lifestyles->save($lifestyle)) {
                $this->Flash->success(__('El estilo de vida ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El estilo de vida no pudo ser guardado. Intente nuevamente.'));
            }
        }
        $users = $this->Lifestyles->Users->find('list', ['limit' => 200]);
        $this->set(compact('lifestyle', 'users'));
        $this->set('_serialize', ['lifestyle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lifestyle id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lifestyle = $this->Lifestyles->get($id);
        if ($this->Lifestyles->delete($lifestyle)) {
            $this->Flash->success(__('El estilo de vida ha sido borrado.'));
        } else {
            $this->Flash->error(__('El estilo de vida no pudo ser borrado. Intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
