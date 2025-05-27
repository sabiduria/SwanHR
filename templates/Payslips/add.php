<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payslip $payslip
 * @var \Cake\Collection\CollectionInterface|string[] $payrolls
 * @var \Cake\Collection\CollectionInterface|string[] $users
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
                <?= $this->Form->control('salary', ['class' => 'form-control', 'label' => 'salary']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('bank', ['class' => 'form-control', 'label' => 'bank']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('bank_account', ['class' => 'form-control', 'label' => 'bank_account']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('published', ['class' => 'form-control', 'label' => 'published']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('payed', ['class' => 'form-control', 'label' => 'payed']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
