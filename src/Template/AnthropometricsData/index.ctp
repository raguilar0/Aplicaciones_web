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
                <th><?= $this->Paginator->sort('user_id',['label'=>'Apellido']) ?></th>
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
            <tr>
                <td><?= $anthropometricsData->has('user') ? $this->Html->link($anthropometricsData->user->name, ['controller' => 'Users', 'action' => 'view', $anthropometricsData->user->id]) : '' ?></td>
                <td><?= $anthropometricsData->user->last_name_1.' '.$anthropometricsData->user->last_name_2 ?></td>
                <td><?= h($anthropometricsData->date) ?></td>
                <td><?= $this->Number->format($anthropometricsData->height) ?></td>
                <td><?= $this->Number->format($anthropometricsData->weight) ?></td>
                <td><?= $this->Number->format($anthropometricsData->total_fat) ?></td>
                <td><?= h($anthropometricsData->blood_pressure) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $anthropometricsData->id], ['class'=>'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $anthropometricsData->id],['class'=>'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $anthropometricsData->id],['class'=>'btn btn-sm btn-danger'] ,['confirm' => __('¿Seguro que desea borrar a  {0}?', $anthropometricsData->name)]) ?>
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
