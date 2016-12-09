<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Usuario'), ['action' => 'delete', $user->id], ['confirm' => __('¿Seguro que desea borrar a  {0}?', $user->name)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index']) ?> </li>
          <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name)?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primer apellido') ?></th>
            <td><?= h($user->last_name_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segundo apellido') ?></th>
            <td><?= h($user->last_name_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocupación') ?></th>
            <td><?= h($user->occupation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo electrónico') ?></th>
            <td><?= h($user->e_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direción') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($user->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= $this->Number->format($user->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($user->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($user->birth_date) ?></td>
        </tr>
    </table>
</div>