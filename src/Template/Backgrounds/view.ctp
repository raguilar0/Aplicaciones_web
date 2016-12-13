<div class="well">
  <?php if($this->request->session()->read('Auth.User.role') == 'admin' || $this->request->session()->read('Auth.User.id') == $background->user->id ){ ?>
    <h3><?= $background->has('user') ? $this->Html->link($background->user->name." ".$background->user->last_name_1." ".$background->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $background->user->id]) : '' ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Enfermedades cardiacas') ?></th>
            <td><?= h($background->disease_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HTA') ?></th>
            <td><?= h($background->disease_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diabetes') ?></th>
            <td><?= h($background->disease_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dislipidemia') ?></th>
            <td><?= h($background->disease_4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alergias') ?></th>
            <td><?= h($background->disease_5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Úlceras') ?></th>
            <td><?= h($background->disease_6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Problemas óseos') ?></th>
            <td><?= h($background->disease_7) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gastritis') ?></th>
            <td><?= h($background->disease_8) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colitis') ?></th>
            <td><?= h($background->disease_9) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estres') ?></th>
            <td><?= h($background->disease_10) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DM en la familia') ?></th>
            <td><?= h($background->family_disease_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HTA en la familia') ?></th>
            <td><?= h($background->family_disease_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dislipidemia en la familia') ?></th>
            <td><?= h($background->family_disease_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Otras enfermedades en la familia') ?></th>
            <td><?= h($background->family_disease_4) ?></td>
        </tr>
    </table>
    <?php } ?>
</div>
