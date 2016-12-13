<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Plans Controller
 *
 * @property \App\Model\Table\PlansTable $Plans
 */
class PlansController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    /*public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'DairyProducts', 'Vegetables', 'Fruits', 'Flours', 'Meats', 'Fats', 'Explanations']
        ];
        $plans = $this->paginate($this->Plans);

        $this->set(compact('plans'));
        $this->set('_serialize', ['plans']);
    }*/

    /**
     * View method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      $plan = $this->Plans->find()
      ->hydrate(false)
      ->andWhere(['Plans.user_id'=>$id]);
      $plan = $plan->toArray();
      $id = $plan[0]['id'];
      $plan = $this->Plans->get($id, [
          'contain' => ['Users', 'DairyProducts', 'Vegetables', 'Fruits', 'Flours', 'Meats', 'Fats', 'Explanations']
      ]);
      $this->set('plan', $plan);
      $this->set('_serialize', ['plan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $plans = TableRegistry::get('Plans');
        $plan = $plans->newEntity($this->request->data(),['associated'=>['DairyProducts','Vegetables','Fruits','Flours','Meats','Fats','Explanations']]);
        if ($this->request->is('post')) {
            $plan = $this->Plans->patchEntity($plan, $this->request->data);
            if ($plans->save($plan)) {
                $this->Flash->success(__('El plan ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El plan no pudo ser guardado. Intente nuevamente.'));
            }
        }
        $users = $this->Plans->Users->find('list', ['limit' => 200]);
        $this->set(compact('plan', 'users'));
        $this->set('_serialize', ['plan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $plan = $this->Plans->get($id, [
            'contain' => ['DairyProducts','Vegetables','Fruits','Flours','Meats','Fats','Explanations']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plan = $this->Plans->patchEntity($plan, $this->request->data);
            if ($this->Plans->save($plan)) {
              $this->Flash->success(__('El plan ha sido guardado.'));

              return $this->redirect(['action' => 'index']);
          } else {
              $this->Flash->error(__('El plan no pudo ser guardado. Intente nuevamente.'));
            }
        }
        $users = $this->Plans->Users->find('list', ['limit' => 200]);
        $dairyProducts = $this->Plans->DairyProducts->find('list', ['limit' => 200]);
        $vegetables = $this->Plans->Vegetables->find('list', ['limit' => 200]);
        $fruits = $this->Plans->Fruits->find('list', ['limit' => 200]);
        $flours = $this->Plans->Flours->find('list', ['limit' => 200]);
        $meats = $this->Plans->Meats->find('list', ['limit' => 200]);
        $fats = $this->Plans->Fats->find('list', ['limit' => 200]);
        $explanations = $this->Plans->Explanations->find('list', ['limit' => 200]);
        $this->set(compact('plan', 'users', 'dairyProducts', 'vegetables', 'fruits', 'flours', 'meats', 'fats', 'explanations'));
        $this->set('_serialize', ['plan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $plan = $this->Plans->get($id);
        if ($this->Plans->delete($plan)) {
            $this->Flash->success(__('El plan ha sido borrado.'));
        } else {
            $this->Flash->error(__('El plan no pudo ser borrado. Intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
