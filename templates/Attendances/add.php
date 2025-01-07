<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance $attendance
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $attendancestypes
 */
?>
<div class="mt-3">
    <?= $this->Form->create($attendance) ?>
        <div class="row gy-2">
            <h3><?= __('Add Attendance') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('attendancestype_id', ['options' => $attendancestypes, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('check_in', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('check_out', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('notes', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
