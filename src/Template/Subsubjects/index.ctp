<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subsubject[]|\Cake\Collection\CollectionInterface $subsubjects
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subsubject'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Selections'), ['controller' => 'Selections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Selection'), ['controller' => 'Selections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subsubjects index large-9 medium-8 columns content">
    <h3><?= __('Subsubjects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>

                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('selection_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subsubjects as $subsubject): ?>
            <tr>

                <td><?= $subsubject->name ?></td>
                <td><?= $subsubject->has('selection') ? $this->Html->link($subsubject->selection->name, ['controller' => 'Selections', 'action' => 'view', $subsubject->selection->id]) : '' ?></td>
                <td><?= h($subsubject->code) ?></td>
                <td><?= h($subsubject->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subsubject->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subsubject->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subsubject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subsubject->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
