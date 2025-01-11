<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leavestype $leavestype
 */
?>
<div class="mt-3">
    <?= $this->Form->create($leavestype) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Name']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('maxdaysperyear', ['class' => 'form-control', 'label' => 'Max days per year']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
