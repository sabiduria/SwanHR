<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leavesbalance $leavesbalance
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $leavestypes
 */
?>
<div class="mt-3">
    <?= $this->Form->create($leavesbalance) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'user_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('leavestype_id', ['options' => $leavestypes, 'class' => 'form-select select2', 'label' => 'leavestype_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('availablebalance', ['class' => 'form-control', 'label' => 'availablebalance']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('balanceyear', ['class' => 'form-control', 'label' => 'balanceyear']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
