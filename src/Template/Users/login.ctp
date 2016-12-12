<div class="row">
  <?= $this->Flash->render('auth') ?>
  <?= $this->Form->create() ?>
      <fieldset>
          <legend><?= __('Por favor ingrese su nombre de usuario y contraseña') ?></legend>
          <?= $this->Form->input('username',['label'=>'Nombre de usuario']) ?>
          <?= $this->Form->input('password',['label'=>'contraseña']) ?>
      </fieldset>
  <?= $this->Form->button(__('Iniciar Sesión'),['class'=>'btn btn-sm btn-success']); ?>
  <?= $this->Form->end() ?>
</div>
