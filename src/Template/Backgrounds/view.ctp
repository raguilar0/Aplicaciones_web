<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Background'), ['action' => 'edit', $background->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Background'), ['action' => 'delete', $background->id], ['confirm' => __('Are you sure you want to delete # {0}?', $background->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Backgrounds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Background'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="backgrounds view large-9 medium-8 columns content">
    <h3><?= h($background->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $background->has('user') ? $this->Html->link($background->user->name, ['controller' => 'Users', 'action' => 'view', $background->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Heart Disease') ?></th>
            <td><?= h($background->heart_disease) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HTA') ?></th>
            <td><?= h($background->HTA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diabetes') ?></th>
            <td><?= h($background->diabetes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dyslipidemia') ?></th>
            <td><?= h($background->dyslipidemia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Allergy') ?></th>
            <td><?= h($background->allergy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ulcer') ?></th>
            <td><?= h($background->ulcer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bone Problem') ?></th>
            <td><?= h($background->bone_problem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gastritis') ?></th>
            <td><?= h($background->gastritis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colitis') ?></th>
            <td><?= h($background->colitis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stress') ?></th>
            <td><?= h($background->stress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($background->id) ?></td>
        </tr>
    </table>
</div>
