<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h2>Estilo de vida</h2>
    </div>
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id',['label'=>'Usuario']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('smoke',['label'=>'Fumador']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('alcohol',['label'=>'Alcohol']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('physical_activity',['label'=>'Actividad física']) ?></th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lifestyles as $lifestyle): ?>
            <tr>
                <td><?= $lifestyle->has('user') ? $this->Html->link($lifestyle->user->name." ".$lifestyle->user->last_name_1." ".$lifestyle->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $lifestyle->user->id]) : '' ?></td>
                <td><?= h($lifestyle->smoke) ?></td>
                <td><?= h($lifestyle->alcohol) ?></td>
                <td><?= h($lifestyle->physical_activity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__(''), ['action' => 'view', $lifestyle->id],['class'=>'glyphicon glyphicon-eye-open btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__(''), ['action' => 'edit', $lifestyle->id],['class'=>'glyphicon glyphicon-pencil btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $lifestyle->id], ['confirm' =>'¿Seguro que desea borrar este estilo de vida?', 'class'=>'glyphicon glyphicon-trash btn btn-sm btn-danger']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
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
