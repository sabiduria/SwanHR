<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependent $dependent
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $relationships
 */
?>
<div class="mt-3">
    <?= $this->Form->create($dependent) ?>
        <div class="row gy-2">
            <h3><?= __('Add Dependent') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('relationship_id', ['options' => $relationships, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('fistname', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('secondname', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('lastname', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('gender', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
