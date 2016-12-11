<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Anthropometrics Data'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="anthropometricsData index large-9 medium-8 columns content">
    <h3><?= __('Datos antropométricos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Nombre']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Apellido']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('date',['label'=>'Fecha']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('height',['label'=>'Talla']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight',['label'=>'Peso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_fat',['label'=>'Grasa total']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('blood_pressure',['label'=>'Presión']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $anthropometricsData->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $anthropometricsData->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $anthropometricsData->id], ['confirm' => __('¿Seguro que desea borrar los datos {0}?', $anthropometricsData->id)]) ?>
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
