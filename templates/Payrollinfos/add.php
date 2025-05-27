<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payrollinfo $payrollinfo
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="mt-3">
    <?= $this->Form->create($payrollinfo) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'Employee']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('salary_per_day', ['class' => 'form-control', 'label' => 'Salary per day']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
