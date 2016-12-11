<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Anthropometrics Data'), ['action' => 'edit', $anthropometricsData->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Anthropometrics Data'), ['action' => 'delete', $anthropometricsData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anthropometricsData->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Anthropometrics Data'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anthropometrics Data'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="anthropometricsData view large-9 medium-8 columns content">
    <h3><?= $anthropometricsData->has('user') ? $this->Html->link($anthropometricsData->user->name.' '.$anthropometricsData->user->last_name_1.' '.$anthropometricsData->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $anthropometricsData->user->id]) : '' ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($anthropometricsData->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Talla') ?></th>
            <td><?= $this->Number->format($anthropometricsData->height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($anthropometricsData->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Circuferencia de Cintura') ?></th>
            <td><?= $this->Number->format($anthropometricsData->waist_circumference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Circuferencia de Cadera') ?></th>
            <td><?= $this->Number->format($anthropometricsData->hip_circumference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EM') ?></th>
            <td><?= $this->Number->format($anthropometricsData->em) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grasa total') ?></th>
            <td><?= $this->Number->format($anthropometricsData->total_fat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grasa visceral') ?></th>
            <td><?= $this->Number->format($anthropometricsData->visceral_fat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IMC') ?></th>
            <td><?= $this->Number->format($anthropometricsData->imc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('% de músculo') ?></th>
            <td><?= $this->Number->format($anthropometricsData->muscle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pliegues cutaneos') ?></th>
            <td><?= $this->Number->format($anthropometricsData->skindfolds) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Triceps') ?></th>
            <td><?= $this->Number->format($anthropometricsData->triceps) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subescapular') ?></th>
            <td><?= $this->Number->format($anthropometricsData->subscapular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abdominal') ?></th>
            <td><?= $this->Number->format($anthropometricsData->abdominal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suprailiacop') ?></th>
            <td><?= $this->Number->format($anthropometricsData->sp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presión arterial') ?></th>
            <td><?= h($anthropometricsData->blood_pressure) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pulso') ?></th>
            <td><?= $this->Number->format($anthropometricsData->pulse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso meta') ?></th>
            <td><?= $this->Number->format($anthropometricsData->weight_goal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grasa meta') ?></th>
            <td><?= $this->Number->format($anthropometricsData->fat_goal) ?></td>
        </tr>
    </table>
</div>
