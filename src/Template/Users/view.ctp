<div class="well">
  <div class="col-md-3 col-md-offset-9">
    <div class="actions">
      <?php
      if($this->request->session()->read('Auth.User.role') == 'admin'){ ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Users','action' => 'edit', $user->id], ['title'=>'Editar antecedentes','class'=>'glyphicon glyphicon-pencil btn btn-sm btn-warning']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Backgrounds','action' => 'view', $user->id], ['title'=>'Ver antecedentes','class'=>'glyphicon glyphicon-paperclip btn btn-sm btn-info']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Lifestyles','action' => 'view', $user->id], ['title'=>'Ver Estilo de vida','class'=>'glyphicon glyphicon-heart btn btn-sm btn-info']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'AnthropometricsData','action' => 'view', $user->id], ['title'=>'Ver medidas','class'=>'glyphicon glyphicon-book btn btn-sm btn-info']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Plans','action' => 'view', $user->id], ['title'=>'Ver planes','class'=>'glyphicon glyphicon-glass btn btn-sm btn-info']) ?>
       <?php }
          elseif($this->request->session()->read('Auth.User.role') == 'user'){ ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Backgrounds','action' => 'view', $user->id], ['title'=>'Ver antecedentes','class'=>'glyphicon glyphicon-paperclip btn btn-sm btn-info']) ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Lifestyles','action' => 'view', $user->id], ['title'=>'Ver Estilo de vida','class'=>'glyphicon glyphicon-heart btn btn-sm btn-info']) ?>
            <?=  $this->Html->link(__(''), ['controller'=>'AnthropometricsData','action' => 'view', $user->id], ['title'=>'Ver medidas','class'=>'glyphicon glyphicon-book btn btn-sm btn-info']) ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Plans','action' => 'view', $user->id], ['title'=>'Ver planes','class'=>'glyphicon glyphicon-glass btn btn-sm btn-info']) ?>
          <?php } ?>
    </div>
  </div>
  <?php if($this->request->session()->read('Auth.User.role') == 'admin' || $this->request->session()->read('Auth.User.id') == $user->id ){ ?>
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
    <?php } ?>
</div>
