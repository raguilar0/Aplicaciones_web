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
              <tr>
                  <td><?= h($appointment->date) ?></td>
                  <td><?= $appointment->has('user') ? $this->Html->link($appointment->user->name." ".$appointment->user->last_name_1." ".$appointment->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $appointment->user->id]) : '' ?></td>
                  <td><?= $appointment->hour->name ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id]) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id]) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
      <div class="paginator">
          <ul class="pagination">
              <?= $this->Paginator->prev('< ' . __('previous')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('next') . ' >') ?>
          </ul>
          <p><?= $this->Paginator->counter() ?></p>
      </div>
    </div>
  </div>
</div>
