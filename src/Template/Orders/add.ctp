<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<?php
$urlToCarsAutocompletedemoJson = $this->Url->build([
    "controller" => "Subsubjects",
    "action" => "findSubsubjects",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToCarsAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Orders/add_edit/subsubjectAutocomplete', ['block' => 'scriptBottom']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
//            echo $this->Form->control('user_id', ['options' => $users]);
        echo $this->Form->control('title');
//       echo $this->Form->control('subsubject_id', ['label' => __('Subsubject') . ' (' . __('Autocomplete') . ')', 'type' => 'text', 'id' => 'autocomplete']);
        echo $this->Form->control('subsubject_id', ['label' => '(subsubject_id)', 'type' => 'hidden']);
        ?>
        <div class="input text">
            <label for="autocomplete"><?= ("Subsubject"). ' (' .('Autocomplete') . ')' ?></label>
            <input id="autocomplete" type="text">
        </div>

        <?php
   

//      
//            echo $this->Form->control('slug');
        echo $this->Form->control('body');
        echo $this->Form->control('published');
        echo $this->Form->control('tags._ids', ['options' => $tags]);
        echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
