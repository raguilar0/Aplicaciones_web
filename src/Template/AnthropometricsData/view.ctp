<div class="well">
  <div class="col-md-3 col-md-offset-9">
    <div class="actions">
      <?php
      if($this->request->session()->read('Auth.User.role') == 'admin'){ ?>
        <?=  $this->Html->link(__(''), ['controller'=>'AnthropometricsData','action' => 'edit', $anthropometricsData->id], ['title'=>'Editar antecedentes','class'=>'glyphicon glyphicon-pencil btn btn-sm btn-warning']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Backgrounds','action' => 'view', $anthropometricsData->user->id], ['title'=>'Ver antecedentes','class'=>'glyphicon glyphicon-paperclip btn btn-sm btn-info']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Lifestyles','action' => 'view', $anthropometricsData->user->id], ['title'=>'Ver Estilo de vida','class'=>'glyphicon glyphicon-heart btn btn-sm btn-info']) ?>
        <?=  $this->Html->link(__(''), ['controller'=>'Plans','action' => 'view', $anthropometricsData->user->id], ['title'=>'Ver Plan','class'=>'glyphicon glyphicon-glass btn btn-sm btn-info']) ?>
       <?php }
          elseif($this->request->session()->read('Auth.User.role') == 'user'){ ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Users','action' => 'view', $anthropometricsData->user->id], ['title'=>'Ver perfil','class'=>'glyphicon glyphicon-user btn btn-sm btn-info']) ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Lifestyles','action' => 'view', $anthropometricsData->user->id], ['title'=>'Ver Estilo de vida','class'=>'glyphicon glyphicon-heart btn btn-sm btn-info']) ?>
            <?=  $this->Html->link(__(''), ['controller'=>'Plans','action' => 'view', $anthropometricsData->user->id], ['title'=>'Ver plan','class'=>'glyphicon glyphicon-glass btn btn-sm btn-info']) ?>
          <?php } ?>
    </div>
  </div>
  <?php if($this->request->session()->read('Auth.User.role') == 'admin' || $this->request->session()->read('Auth.User.id') == $anthropometricsData->user->id ){ ?>
    <h3><?= $anthropometricsData->has('user') ? $this->Html->link($anthropometricsData->user->name.' '.$anthropometricsData->user->last_name_1.' '.$anthropometricsData->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $anthropometricsData->user->id]) : '' ?></h3>
    <table>
        <tr>
            <th><?= __('Fecha') ?></th>
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
    <?php } ?>
</div>
