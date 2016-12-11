<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h2>Usuarios</h2>
    </div>
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('name',['label'=>'Nombre']) ?></th>
                <th><?= $this->Paginator->sort('last_name_1',['label'=>'Primer apellido']) ?></th>
                <th><?= $this->Paginator->sort('last_name_2',['label'=>'Segundo apellido']) ?></th>
                <th><?= $this->Paginator->sort('e_mail',['label'=>'Correo electrónico']) ?></th>
                <th><?= $this->Paginator->sort('address',['label'=>'Direción']) ?></th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->last_name_1) ?></td>
                <td><?= h($user->last_name_2) ?></td>
                <td><?= h($user->e_mail) ?></td>
                <td><?= h($user->address) ?></td>
                <td>
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class'=>'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id],['class'=>'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $user->id],['class'=>'btn btn-sm btn-danger'] ,['confirm' => __('¿Seguro que desea borrar a  {0}?', $user->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
  </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers(['before'=>'', 'after'=>'']) ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
  </div>
</div>
