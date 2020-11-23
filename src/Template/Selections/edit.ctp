<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Selection $selection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $selection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $selection->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Selections'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subsubjects'), ['controller' => 'Subsubjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subsubject'), ['controller' => 'Subsubjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="selections form large-9 medium-8 columns content">
    <?= $this->Form->create($selection) ?>
    <fieldset>
        <legend><?= __('Edit Selection') ?></legend>
        <?php
            echo $this->Form->control('department_id');
            echo $this->Form->control('code');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
