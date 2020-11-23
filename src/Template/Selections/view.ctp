<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Selection $selection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Selection'), ['action' => 'edit', $selection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Selection'), ['action' => 'delete', $selection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $selection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Selections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Selection'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subsubjects'), ['controller' => 'Subsubjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subsubject'), ['controller' => 'Subsubjects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="selections view large-9 medium-8 columns content">
    <h3><?= h($selection->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($selection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department Id') ?></th>
            <td><?= $this->Number->format($selection->department_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($selection->code) ?></td>
        </tr>


    </table>
    <div class="related">
        <?php if (!empty($selection->departments)): ?>
        <h4><?= __('Related Departments') ?></h4>
        
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($selection->departments as $departments): ?>
            <tr>
                <td><?= h($departments->id) ?></td>
                <td><?= h($departments->code) ?></td>
                <td><?= h($departments->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subsubjects') ?></h4>
        <?php if (!empty($selection->subsubjects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Name') ?></th>

                <th scope="col"><?= __('Code') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($selection->subsubjects as $subsubjects): ?>
            <tr>
                <td><?= h($subsubjects->name) ?></td>

                <td><?= h($subsubjects->code) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Subsubjects', 'action' => 'view', $subsubjects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subsubjects', 'action' => 'edit', $subsubjects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subsubjects', 'action' => 'delete', $subsubjects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subsubjects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
