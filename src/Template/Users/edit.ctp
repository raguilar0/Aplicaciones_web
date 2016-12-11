<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="page-header">
      <h2>Editar usuario</h2>
    </div>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('last_name_1');
            echo $this->Form->input('last_name_2');
            echo $this->Form->input('role');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('state');
            echo $this->Form->input('age');
            echo $this->Form->input('phone');
            echo $this->Form->input('gender');
            echo $this->Form->input('occupation');
            echo $this->Form->input('e_mail');
            echo $this->Form->input('address');
            echo $this->Form->input('start_date');
            echo $this->Form->input('birth_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
