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
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'Staff Member']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('attendancestype_id', ['options' => $attendancestypes, 'class' => 'form-select select2', 'label' => 'Attendances type']); ?>
            </div>
            <div class="col-xl-6">
                <?= $this->Form->control('check_in', ['empty' => true, 'class' => 'form-control', 'label' => 'Check In']); ?>
            </div>
            <div class="col-xl-6">
                <?= $this->Form->control('check_out', ['empty' => true, 'class' => 'form-control', 'label' => 'Check Out']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('notes', ['class' => 'form-control', 'label' => 'Notes']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
