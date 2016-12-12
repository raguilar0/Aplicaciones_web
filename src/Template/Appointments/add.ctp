<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Lista de citas</h2>
        </div>
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <?php
            echo $this->Form->input('date',['label'=>'Fecha']);
            echo $this->Form->input('user_id', ['options' => $users,'label'=>'Usuario']);
            echo $this->Form->input('hour_id', ['options' => $hours,'label'=>'Hora']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
  </div>
</div>
