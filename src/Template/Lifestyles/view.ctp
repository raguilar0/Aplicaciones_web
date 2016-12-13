<div class="well">
  <div class="col-md-3 col-md-offset-9">
    <div class="actions">
      <?php
      if($this->request->session()->read('Auth.User.role') == 'admin'){ ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Lifestyles','action' => 'edit', $lifestyle->id], ['title'=>'Editar antecedentes','class'=>'glyphicon glyphicon-pencil btn btn-sm btn-warning']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Backgrounds','action' => 'view', $lifestyle->user->id], ['title'=>'Ver Estilo de vida','class'=>'glyphicon glyphicon-paperclip btn btn-sm btn-info']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'AnthropometricsData','action' => 'view', $lifestyle->user->id], ['title'=>'Ver medidas','class'=>'glyphicon glyphicon-book btn btn-sm btn-info']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Plans','action' => 'view', $lifestyle->user->id], ['title'=>'Ver planes','class'=>'glyphicon glyphicon-glass btn btn-sm btn-info']) ?>
       <?php }
          elseif($this->request->session()->read('Auth.User.role') == 'user'){ ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Users','action' => 'view', $lifestyle->user->id], ['title'=>'Ver perfil','class'=>'glyphicon glyphicon-user btn btn-sm btn-info']) ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Lifestyles','action' => 'view', $lifestyle->user->id], ['title'=>'Ver Estilo de vida','class'=>'glyphicon glyphicon-heart btn btn-sm btn-info']) ?>
            <?=  $this->Html->link(__(''), ['controller'=>'AnthropometricsData','action' => 'view', $lifestyle->user->id], ['title'=>'Ver medidas','class'=>'glyphicon glyphicon-book btn btn-sm btn-info']) ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Plans','action' => 'view', $lifestyle->user->id], ['title'=>'Ver planes','class'=>'glyphicon glyphicon-glass btn btn-sm btn-info']) ?>
          <?php } ?>
    </div>
  </div>
  <?php if($this->request->session()->read('Auth.User.role') == 'admin' || $this->request->session()->read('Auth.User.id') == $lifestyle->user->id ){ ?>
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
