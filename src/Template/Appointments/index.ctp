<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <div class="page-header">
            <h2>Lista de citas</h2>
        </div>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
          <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('date',['label'=>'Fecha']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Usuario']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('hour_id',['label'=>'Hora']) ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($appointments as $appointment): ?>
                  <?php if( $this->request->session()->read('Auth.User.role') == "admin" || $this->request->session()->read('Auth.User.id') == $appointment->user->id){?>
                <tr>
                    <td><?= h($appointment->date) ?></td>
                    <td><?= $appointment->has('user') ? $this->Html->link($appointment->user->name." ".$appointment->user->last_name_1." ".$appointment->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $appointment->user->id]) : '' ?></td>
                    <td><?= $appointment->hour->name ?></td>
                    <td>
                      <?php if( $this->request->session()->read('Auth.User.role') == "admin" || $this->request->session()->read('Auth.User.id') == $appointment->user->id){?>
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $appointment->id],['class'=>'btn btn-sm btn-info']) ?>
                        <?php } ?>
                        <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $appointment->id],['class'=>'btn btn-sm btn-info']) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $appointment->id], ['confirm' =>'¿¿Seguro que desea borrar esta cita?', 'class'=>'btn btn-sm btn-danger']) ?>
                        <?php } ?>
                    </td>
                </tr>
              <?php } ?>
              <?php endforeach; ?>
          </tbody>
      </table>
      <div class="paginator">
          <ul class="pagination">
              <?= $this->Paginator->prev('< ' . __('anterior')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('siguiente') . ' >') ?>
          </ul>
          <p><?= $this->Paginator->counter() ?></p>
      </div>
    </div>
  </div>
</div>
