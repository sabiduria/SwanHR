<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leavestype $leavestype
 */
?>
<div class="mt-3">
    <?= $this->Form->create($leavestype) ?>
        <div class="row gy-2">
            <h3><?= __('Edit Leavestype') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('name', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('maxdaysperyear', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
