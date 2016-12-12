<div class="well">
    <h3><?= $appointment->has('user') ? $this->Html->link($appointment->user->name.' '.$appointment->user->last_name_1.' '.$appointment->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $appointment->user->id]) : '' ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($appointment->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora') ?></th>
            <td><?= $appointment->hour->name?></td>
        </tr>
    </table>
</div>
