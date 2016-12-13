<div class="well">
  <?php if($this->request->session()->read('Auth.User.role') == 'admin' || $this->request->session()->read('Auth.User.id') == $anthropometricsData->user->id ){ ?>
  <h3><?= $lifestyle->has('user') ? $this->Html->link($lifestyle->user->name." ".$lifestyle->user->last_name_1." ".$lifestyle->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $lifestyle->user->id]) : '' ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fumador') ?></th>
            <td><?= h($lifestyle->smoke) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alcohol') ?></th>
            <td><?= h($lifestyle->alcohol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actividad física') ?></th>
            <td><?= h($lifestyle->physical_activity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($lifestyle->observation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Objetivo de la consulta') ?></th>
            <td><?= h($lifestyle->objective) ?></td>
        </tr>
    </table>
    <?php } ?>
</div>
