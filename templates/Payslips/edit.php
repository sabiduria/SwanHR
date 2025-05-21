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
                <?= $this->Form->control('payroll_id', ['options' => $payrolls, 'class' => 'form-select select2', 'label' => 'payroll_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'user_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('hour_sup', ['class' => 'form-control', 'label' => 'hour_sup']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('nber_days', ['class' => 'form-control', 'label' => 'nber_days']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('primes', ['class' => 'form-control', 'label' => 'primes']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('bank', ['class' => 'form-control', 'label' => 'bank']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('banck_account', ['class' => 'form-control', 'label' => 'banck_account']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
