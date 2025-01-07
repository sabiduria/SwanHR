<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $occupations
 */
?>
<div class="mt-3">
    <?= $this->Form->create($user) ?>
        <div class="row gy-2">
            <h3><?= __('Add User') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('firstname', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('secondname', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('lastname', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('occupation_id', ['options' => $occupations, 'class'=>'form-select select2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('maritalstatus', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('email', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('phone1', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('phone2', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('birthplace', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('birthdate', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('gender', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('nationality', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('typeofidentitypiece', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('identitypiecenumber', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('address_number', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('address_avenue', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('address_district', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('address_municipality', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('education_level', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('education_option', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('affectation_date', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('username', ['class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('password', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
