<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Selections",
    "action" => "getByDepartment",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Subsubjects/add_edit', ['block' => 'scriptBottom']);
?>
<?php


/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subsubject $subsubject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subsubjects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Selections'), ['controller' => 'Selections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Selection'), ['controller' => 'Selections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subsubjects form large-9 medium-8 columns content">
    <?= $this->Form->create($subsubject) ?>
    <fieldset>
        <legend><?= __('Add Subsubject') ?></legend>
        <?php
            echo $this->Form->control('department_id',['options' => $departments]);
            echo $this->Form->control('selection_id', ['options' => $selections]);
            echo $this->Form->control('code');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
