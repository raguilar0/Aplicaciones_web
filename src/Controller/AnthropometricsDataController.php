<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AnthropometricsData Controller
 *
 * @property \App\Model\Table\AnthropometricsDataTable $AnthropometricsData
 */
class AnthropometricsDataController extends AppController
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
        $anthropometricsData = $this->paginate($this->AnthropometricsData);

        $this->set(compact('anthropometricsData'));
        $this->set('_serialize', ['anthropometricsData']);
    }*/

    /**
     * View method
     *
     * @param string|null $id Anthropometrics Data id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      $anthropometricsData = $this->AnthropometricsData->find()
      ->hydrate(false)
      ->andWhere(['AnthropometricsData.user_id'=>$id]);
      $anthropometricsData = $anthropometricsData->toArray();
      $id = $anthropometricsData[0]['id'];
      $anthropometricsData = $this->AnthropometricsData->get($id,[
        'contain'=>['Users']
      ]);
      $this->set('anthropometricsData', $anthropometricsData);
      $this->set('_serialize', ['anthropometricsData']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $anthropometricsData = $this->AnthropometricsData->newEntity();
        if ($this->request->is('post')) {
            $anthropometricsData = $this->AnthropometricsData->patchEntity($anthropometricsData, $this->request->data);
            if ($this->AnthropometricsData->save($anthropometricsData)) {
                $this->Flash->success(__('Las medidas han sido guardadas.'));

                return $this->redirect(['controller'=>'Plans','action' => 'add']);
            } else {
                $this->Flash->error(__('Las medidas no pudieron ser guardadas. Intente nuevamente.'));
            }
        }
        $users = $this->AnthropometricsData->Users->find('list', ['limit' => 200]);
        $this->set(compact('anthropometricsData', 'users'));
        $this->set('_serialize', ['anthropometricsData']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Anthropometrics Data id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $anthropometricsData = $this->AnthropometricsData->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $anthropometricsData = $this->AnthropometricsData->patchEntity($anthropometricsData, $this->request->data);
            if ($this->AnthropometricsData->save($anthropometricsData)) {
              $this->Flash->success(__('Las medidas han sido guardadas.'));

              return $this->redirect(['action' => 'view', $anthropometricsData['user_id']]);
          } else {
              $this->Flash->error(__('Las medidas no pudieron ser guardadas. Intente nuevamente.'));
            }
        }
        $users = $this->AnthropometricsData->Users->find('list', ['limit' => 200]);
        $this->set(compact('anthropometricsData', 'users'));
        $this->set('_serialize', ['anthropometricsData']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Anthropometrics Data id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $anthropometricsData = $this->AnthropometricsData->get($id);
        if ($this->AnthropometricsData->delete($anthropometricsData)) {
            $this->Flash->success(__('Las medidas han sido borradas.'));
        } else {
            $this->Flash->error(__('Las medidas no pudieron ser borradas. Intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
