<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h2>Usuarios</h2>
    </div>
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('name',['label'=>'Nombre']) ?></th>
                <th><?= $this->Paginator->sort('last_name_1',['label'=>'Primer apellido']) ?></th>
                <th><?= $this->Paginator->sort('last_name_2',['label'=>'Segundo apellido']) ?></th>
                <th><?= $this->Paginator->sort('e_mail',['label'=>'Correo electrónico']) ?></th>
                <th><?= $this->Paginator->sort('address',['label'=>'Direción']) ?></th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <?php if( $this->request->session()->read('Auth.User.role') == "admin" || $this->request->session()->read('Auth.User.id') == $user->id){?>
            <tr>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->last_name_1) ?></td>
                <td><?= h($user->last_name_2) ?></td>
                <td><?= h($user->e_mail) ?></td>
                <td><?= h($user->address) ?></td>
                <td>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin" || $this->request->session()->read('Auth.User.id') == $user->id){?>
                    <?= $this->Html->link(__(''), ['action' => 'view', $user->id], ['title'=>'Ver perfil','class'=>'glyphicon glyphicon-eye-open btn btn-sm btn-info']) ?>
                    <?php } ?>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                    <?= $this->Html->link(__(''), ['action' => 'edit', $user->id],['title'=>'Editar perfil','class'=>' glyphicon glyphicon-pencil btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id],['confirm' =>'¿Seguro que desea borrar este usuario ?','title'=>'Borrar perfil', 'class'=>'glyphicon glyphicon-trash btn btn-sm btn-danger']) ?>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
            <?php endforeach; ?>
        </tbody>
      </table>
  </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers(['before'=>'', 'after'=>'']) ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
  </div>
</div>
