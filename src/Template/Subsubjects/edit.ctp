<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subsubject $subsubject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subsubject->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subsubject->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subsubjects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Selections'), ['controller' => 'Selections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Selection'), ['controller' => 'Selections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subsubjects form large-9 medium-8 columns content">
    <?= $this->Form->create($subsubject) ?>
    <fieldset>
        <legend><?= __('Edit Subsubject') ?></legend>
        <?php
            echo $this->Form->control('department_id');
            echo $this->Form->control('selection_id', ['options' => $selections]);
            echo $this->Form->control('code');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
