<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependent $dependent
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $relationships
 */
$gender = ['M' => 'Male', 'F' => 'Female'];
?>
<div class="mt-3">
    <?= $this->Form->create($dependent) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('relationship_id', ['options' => $relationships, 'class' => 'form-select select2', 'label' => 'Relationship']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('fistname', ['class' => 'form-control', 'label' => 'Firstname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('secondname', ['class' => 'form-control', 'label' => 'Secondname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('lastname', ['class' => 'form-control', 'label' => 'Lastname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('gender', ['options' => $gender, 'class' => 'form-select', 'label' => 'Gender']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
