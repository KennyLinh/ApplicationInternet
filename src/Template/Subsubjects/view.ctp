<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subsubject $subsubject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subsubject'), ['action' => 'edit', $subsubject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subsubject'), ['action' => 'delete', $subsubject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subsubject->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subsubjects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subsubject'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Selections'), ['controller' => 'Selections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Selection'), ['controller' => 'Selections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subsubjects view large-9 medium-8 columns content">
    <h3><?= h($subsubject->name) ?></h3>
    <table class="vertical-table">
        <tr>
                    <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subsubject->id) ?></td>
        </tr>
                <tr>
            <th scope="row"><?= __('Department Id') ?></th>
            <td><?= $this->Number->format($subsubject->department_id) ?></td>
        </tr>
            <th scope="row"><?= __('Selection') ?></th>
            <td><?= $subsubject->has('selection') ? $this->Html->link($subsubject->selection->name, ['controller' => 'Selections', 'action' => 'view', $subsubject->selection->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($subsubject->code) ?></td>
        </tr>

    </table>
</div>
