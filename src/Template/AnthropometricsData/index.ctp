<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h2>Medidas</h2>
    </div>
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('user_id',['label'=>'Nombre']) ?></th>
                <th><?= $this->Paginator->sort('date',['label'=>'Fecha']) ?></th>
                <th><?= $this->Paginator->sort('height',['label'=>'Talla']) ?></th>
                <th><?= $this->Paginator->sort('weight',['label'=>'Peso']) ?></th>
                <th><?= $this->Paginator->sort('total_fat',['label'=>'Grasa total']) ?></th>
                <th><?= $this->Paginator->sort('blood_pressure',['label'=>'Presión']) ?></th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anthropometricsData as $anthropometricsData): ?>
              <?php if( $this->request->session()->read('Auth.User.role') == "admin" || $this->request->session()->read('Auth.User.id') == $anthropometricsData->user->id){?>
            <tr>
                <td><?= $anthropometricsData->has('user') ? $this->Html->link($anthropometricsData->user->name." ".$anthropometricsData->user->last_name_1." ".$anthropometricsData->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $anthropometricsData->user->id]) : '' ?></td>
                <td><?= h($anthropometricsData->date) ?></td>
                <td><?= $this->Number->format($anthropometricsData->height) ?></td>
                <td><?= $this->Number->format($anthropometricsData->weight) ?></td>
                <td><?= $this->Number->format($anthropometricsData->total_fat) ?></td>
                <td><?= h($anthropometricsData->blood_pressure) ?></td>
                <td>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin" || $this->request->session()->read('Auth.User.id') == $anthropometricsData->user->id){?>
                    <?= $this->Html->link(__(''), ['action' => 'view', $anthropometricsData->id], ['class'=>'glyphicon glyphicon-eye-open btn btn-sm btn-info']) ?>
                    <?php } ?>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                    <?= $this->Html->link(__(''), ['action' => 'edit', $anthropometricsData->id],['class'=>'glyphicon glyphicon-pencil btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $anthropometricsData->id],['confirm' =>'¿Seguro que desea borrar estas medidas?','class'=>'glyphicon glyphicon-trash btn btn-sm btn-danger'] ) ?>
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
