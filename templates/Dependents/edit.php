<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependent $dependent
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $relationships
 */
?>
<div class="mt-3">
    <?= $this->Form->create($dependent) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select select2', 'label' => 'user_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('relationship_id', ['options' => $relationships, 'class' => 'form-select select2', 'label' => 'relationship_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('fistname', ['class' => 'form-control', 'label' => 'fistname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('secondname', ['class' => 'form-control', 'label' => 'secondname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('lastname', ['class' => 'form-control', 'label' => 'lastname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('gender', ['class' => 'form-control', 'label' => 'gender']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
