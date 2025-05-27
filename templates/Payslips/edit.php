<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payslip $payslip
 * @var string[]|\Cake\Collection\CollectionInterface $payrolls
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="mt-3">
    <?= $this->Form->create($payslip) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'Employee', 'disabled' => 'disabled']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('nber_days', ['class' => 'form-control', 'label' => 'Nber Days', 'disabled' => 'disabled']); ?>
            </div>
            <div class="col-xl-6">
                <?= $this->Form->control('hour_sup', ['class' => 'form-control', 'label' => 'Hours Sup.']); ?>
            </div>
            <div class="col-xl-6">
                <?= $this->Form->control('primes', ['class' => 'form-control', 'label' => 'Bonus']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
