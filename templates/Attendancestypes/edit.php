<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendancestype $attendancestype
 */
?>
<div class="mt-3">
    <?= $this->Form->create($attendancestype) ?>
        <div class="row gy-2">
            <h3><?= __('Edit Attendancestype') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('name', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('penality', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
