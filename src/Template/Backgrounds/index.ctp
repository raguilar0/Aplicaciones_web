<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h2>Antededentes</h2>
    </div>
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Usuario']) ?></th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($backgrounds as $background): ?>
            <tr>
                <td><?= $background->has('user') ? $this->Html->link($background->user->name." ".$background->user->last_name_1." ".$background->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $background->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__(''), ['action' => 'view', $background->id],['class'=>'glyphicon glyphicon-eye-open btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__(''), ['action' => 'edit', $background->id],['class'=>'glyphicon glyphicon-pencil btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $background->id], ['confirm' => '¿Seguro que desea borrar estos antecedentes?', 'class'=>'glyphicon glyphicon-trash btn btn-sm btn-danger']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
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
