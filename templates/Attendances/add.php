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
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'user_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('attendancestype_id', ['options' => $attendancestypes, 'class' => 'form-select select2', 'label' => 'attendancestype_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('check_in', ['empty' => true, 'class' => 'form-control', 'label' => 'check_in']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('check_out', ['empty' => true, 'class' => 'form-control', 'label' => 'check_out']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('notes', ['class' => 'form-control', 'label' => 'notes']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>