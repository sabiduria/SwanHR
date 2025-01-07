<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proexperience $proexperience
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="mt-3">
    <?= $this->Form->create($proexperience) ?>
        <div class="row gy-2">
            <h3><?= __('Edit Proexperience') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('startdate', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('endate', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('institution', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('occupation', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('comments', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
