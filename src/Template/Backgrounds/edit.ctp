<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $background->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $background->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Backgrounds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="backgrounds form large-9 medium-8 columns content">
    <?= $this->Form->create($background) ?>
    <fieldset>
        <legend><?= __('Edit Background') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('heart_disease');
            echo $this->Form->input('HTA');
            echo $this->Form->input('diabetes');
            echo $this->Form->input('dyslipidemia');
            echo $this->Form->input('allergy');
            echo $this->Form->input('ulcer');
            echo $this->Form->input('bone_problem');
            echo $this->Form->input('gastritis');
            echo $this->Form->input('colitis');
            echo $this->Form->input('stress');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
