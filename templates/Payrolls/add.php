<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll $payroll
 */
?>
<div class="mt-3">
    <?= $this->Form->create($payroll) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('payroll_period', ['class' => 'form-control', 'label' => 'payroll_period']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('start_date', ['empty' => true, 'class' => 'form-control', 'label' => 'start_date']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('end_date', ['empty' => true, 'class' => 'form-control', 'label' => 'end_date']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('actived', ['class' => 'form-control', 'label' => 'actived']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
