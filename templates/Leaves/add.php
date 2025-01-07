<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 * @var \Cake\Collection\CollectionInterface|string[] $leavestypes
 * @var \Cake\Collection\CollectionInterface|string[] $statuses
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Leaves'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="leaves form content">
            <?= $this->Form->create($leave) ?>
            <fieldset>
                <legend><?= __('Add Leave') ?></legend>
                <?php
                    echo $this->Form->control('leavestype_id', ['options' => $leavestypes]);
                    echo $this->Form->control('status_id', ['options' => $statuses, 'empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('startdate', ['empty' => true]);
                    echo $this->Form->control('enddate', ['empty' => true]);
                    echo $this->Form->control('reason');
                    echo $this->Form->control('approvedby');
                    echo $this->Form->control('approveddate', ['empty' => true]);
                    echo $this->Form->control('createdby');
                    echo $this->Form->control('modifiedby');
                    echo $this->Form->control('deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
