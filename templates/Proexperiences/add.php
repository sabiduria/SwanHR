<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proexperience $proexperience
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="mt-3">
    <?= $this->Form->create($proexperience) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'user_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('startdate', ['empty' => true, 'class' => 'form-control', 'label' => 'startdate']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('endate', ['empty' => true, 'class' => 'form-control', 'label' => 'endate']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('institution', ['class' => 'form-control', 'label' => 'institution']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('occupation', ['class' => 'form-control', 'label' => 'occupation']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('comments', ['class' => 'form-control', 'label' => 'comments']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
