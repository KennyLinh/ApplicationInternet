<?php $this->extend('../../Layout/TwitterBootstrap/dashboard_dropdown'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink( __('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id), 'class' => 'nav-link'] ) ?></li>
<li><?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('List Selections'), ['controller' => 'Selections', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Selection'), ['controller' => 'Selections', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Subsubjects'), ['controller' => 'Subsubjects', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Subsubject'), ['controller' => 'Subsubjects', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', $this->fetch('tb_actions')); ?>

<div class="departments view large-9 medium-8 columns content">
    <h3><?= h($department->name) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Code') ?></th>
                <td><?= h($department->code) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($department->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($department->id) ?></td>
            </tr>
        </table>
    </div>
    <div class="related">
        <h4><?= __('Related Selections') ?></h4>
        <?php if (!empty($department->selections)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Department Id') ?></th>
                    <th scope="col"><?= __('Code') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($department->selections as $selections): ?>
                <tr>
                    <td><?= h($selections->id) ?></td>
                    <td><?= h($selections->department_id) ?></td>
                    <td><?= h($selections->code) ?></td>
                    <td><?= h($selections->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Selections', 'action' => 'view', $selections->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Selections', 'action' => 'edit', $selections->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Selections', 'action' => 'delete', $selections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $selections->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subsubjects') ?></h4>
        <?php if (!empty($department->subsubjects)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Department Id') ?></th>
                    <th scope="col"><?= __('Selection Id') ?></th>
                    <th scope="col"><?= __('Code') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($department->subsubjects as $subsubjects): ?>
                <tr>
                    <td><?= h($subsubjects->id) ?></td>
                    <td><?= h($subsubjects->department_id) ?></td>
                    <td><?= h($subsubjects->selection_id) ?></td>
                    <td><?= h($subsubjects->code) ?></td>
                    <td><?= h($subsubjects->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Subsubjects', 'action' => 'view', $subsubjects->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Subsubjects', 'action' => 'edit', $subsubjects->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Subsubjects', 'action' => 'delete', $subsubjects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subsubjects->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
