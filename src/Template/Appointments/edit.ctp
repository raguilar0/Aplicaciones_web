<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Editar cita</h2>
        </div>
      <?= $this->Form->create($appointment) ?>
      <fieldset>
          <?php
              echo $this->Form->input('date',['label'=>'Fecha']);
              echo $this->Form->input('user_id', ['options' => $users,'label'=>'Usuario']);
              echo $this->Form->input('hour_id', ['options' => $hours,'label'=>'Hora']);
          ?>
      </fieldset>
      <?= $this->Form->button('Editar',['class'=>'btn btn-sm btn-primary']) ?>
      <?= $this->Form->end() ?>
  </div>
</div>
