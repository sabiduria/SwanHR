<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 * @var \Cake\Collection\CollectionInterface|string[] $leavestypes
 * @var \Cake\Collection\CollectionInterface|string[] $statuses
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="mt-3">
    <?= $this->Form->create($leave) ?>
        <div class="row gy-2">
            <h3><?= __('Add Leave') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('leavestype_id', ['options' => $leavestypes, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('status_id', ['options' => $statuses, 'empty' => true, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('startdate', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('enddate', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('reason', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('approvedby', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('approveddate', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
