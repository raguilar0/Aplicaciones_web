<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Background'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="backgrounds index large-9 medium-8 columns content">
    <h3><?= __('Backgrounds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heart_disease') ?></th>
                <th scope="col"><?= $this->Paginator->sort('HTA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diabetes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dyslipidemia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allergy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ulcer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bone_problem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gastritis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colitis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stress') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($backgrounds as $background): ?>
            <tr>
                <td><?= $this->Number->format($background->id) ?></td>
                <td><?= $background->has('user') ? $this->Html->link($background->user->name, ['controller' => 'Users', 'action' => 'view', $background->user->id]) : '' ?></td>
                <td><?= h($background->heart_disease) ?></td>
                <td><?= h($background->HTA) ?></td>
                <td><?= h($background->diabetes) ?></td>
                <td><?= h($background->dyslipidemia) ?></td>
                <td><?= h($background->allergy) ?></td>
                <td><?= h($background->ulcer) ?></td>
                <td><?= h($background->bone_problem) ?></td>
                <td><?= h($background->gastritis) ?></td>
                <td><?= h($background->colitis) ?></td>
                <td><?= h($background->stress) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $background->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $background->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $background->id], ['confirm' => __('Are you sure you want to delete # {0}?', $background->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
