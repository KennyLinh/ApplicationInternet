<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Selection[]|\Cake\Collection\CollectionInterface $selections
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Selection'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
       <!-- <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li> -->
        <li><?= $this->Html->link(__('List Subsubjects'), ['controller' => 'Subsubjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subsubject'), ['controller' => 'Subsubjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="selections index large-9 medium-8 columns content">
    <h3><?= __('Selections') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($selections as $selection): ?>
            <tr>
             <td><?= h($selection->name) ?></td>
                <td><?= $this->Number->format($selection->department_id) ?></td>
                <td><?= h($selection->code) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $selection->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $selection->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $selection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $selection->id)]) ?>
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
