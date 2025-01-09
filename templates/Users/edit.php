<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $occupations
 */
?>
<div class="mt-3">
    <?= $this->Form->create($user) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= $this->Form->control('firstname', ['class' => 'form-control', 'label' => 'firstname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('secondname', ['class' => 'form-control', 'label' => 'secondname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('lastname', ['class' => 'form-control', 'label' => 'lastname']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('occupation_id', ['options' => $occupations, 'class' => 'form-select select2', 'label' => 'occupation_id']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('maritalstatus', ['class' => 'form-control', 'label' => 'maritalstatus']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('email', ['class' => 'form-control', 'label' => 'email']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('phone1', ['class' => 'form-control', 'label' => 'phone1']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('phone2', ['class' => 'form-control', 'label' => 'phone2']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('birthplace', ['class' => 'form-control', 'label' => 'birthplace']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('birthdate', ['empty' => true, 'class' => 'form-control', 'label' => 'birthdate']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('gender', ['class' => 'form-control', 'label' => 'gender']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('nationality', ['class' => 'form-control', 'label' => 'nationality']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('typeofidentitypiece', ['class' => 'form-control', 'label' => 'typeofidentitypiece']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('identitypiecenumber', ['class' => 'form-control', 'label' => 'identitypiecenumber']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('address_number', ['class' => 'form-control', 'label' => 'address_number']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('address_avenue', ['class' => 'form-control', 'label' => 'address_avenue']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('address_district', ['class' => 'form-control', 'label' => 'address_district']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('address_municipality', ['class' => 'form-control', 'label' => 'address_municipality']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('education_level', ['class' => 'form-control', 'label' => 'education_level']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('education_option', ['class' => 'form-control', 'label' => 'education_option']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('affectation_date', ['empty' => true, 'class' => 'form-control', 'label' => 'affectation_date']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('username', ['class' => 'form-control', 'label' => 'username']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('password', ['class' => 'form-control', 'label' => 'password']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
