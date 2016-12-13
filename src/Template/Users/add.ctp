<div class="row">
  <?php if($this->request->session()->read('Auth.User.role') == 'admin'){ ?>
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Agregar Usuario</h2>
        </div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
                echo $this->Form->input('name',['label'=>'Nombre']);
                echo $this->Form->input('last_name_1',['label'=>'Primer apelido']);
                echo $this->Form->input('last_name_2',['label'=>'Segundo apellido']);
                echo $this->Form->input('role',['label'=>'Rol']);
                echo $this->Form->input('username',['label'=>'Nombre de usuario']);
                echo $this->Form->input('password', ['label'=>'Contraseña']);
                echo $this->Form->input('state',['label'=>'Estado']);
                echo $this->Form->input('age',['label'=>'Edad']);
                echo $this->Form->input('phone',['label'=>'Teléfono']);
                echo $this->Form->input('gender',['label'=>'Sexo']);
                echo $this->Form->input('occupation',['label'=>'Ocupación']);
                echo $this->Form->input('e_mail',['label'=>'Correo electrónico']);
                echo $this->Form->input('address',['label'=>'Dirección']);
                echo $this->Form->input('start_date',['label'=>'Fecha de inicio']);
                echo $this->Form->input('birth_date',['label'=>'Fecha de nacimiento','minYear' => date('Y') - 100, 'maxYear' => date('Y')]);
            ?>
        </fieldset>
        <?= $this->Form->button('Agregar',['class'=>'btn btn-sm btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
    <?php } ?>
</div>
