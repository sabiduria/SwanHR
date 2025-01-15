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
            <div class="col-xl-6">
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'Staff Member']); ?>
            </div>
            <div class="col-xl-6">
                <?= $this->Form->control('startdate', ['empty' => true, 'class' => 'form-control', 'label' => 'Start Date']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('endate', ['empty' => true, 'class' => 'form-control', 'label' => 'End Date']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('institution', ['class' => 'form-control', 'label' => 'Institution']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('occupation', ['class' => 'form-control', 'label' => 'Occupation']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('comments', ['class' => 'form-control', 'label' => 'Comments']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
