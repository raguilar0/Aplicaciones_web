<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Agregar Usuario') ?></legend>
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
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
