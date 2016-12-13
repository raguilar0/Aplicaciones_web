<div class="row">
  <?php if($this->request->session()->read('Auth.User.role') == 'admin'){ ?>
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Agregar Estilo de vida</h2>
        </div>
    <?= $this->Form->create($lifestyle) ?>
    <fieldset>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true, 'label'=>'Usuario']);
            echo $this->Form->input('smoke',['label'=>'Fumador']);
            echo $this->Form->input('alcohol',['label'=>'Alcohol']);
            echo $this->Form->input('physical_activity',['label'=>'Actividad física']);
            echo $this->Form->input('observation',['label'=>'Observaciones']);
            echo $this->Form->input('objective',['label'=>'Obejtivo de la consulta']);
        ?>
    </fieldset>
    <?= $this->Form->button('Agregar',['class'=>'btn btn-sm btn-primary']) ?>
    <?= $this->Form->end() ?>
  </div>
  <?php } ?>
</div>
