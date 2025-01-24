<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $occupations
 */
$gender = ['M' => 'Male', 'F' => 'Female'];
$marital_status = ['Married' => 'Married', 'Single' => 'Single', 'Divorced' => 'Divorced'];
?>
<div class="mt-3">
    <?= $this->Form->create($user) ?>
    <div class="row gy-2">
        <div class="col-xl-12">
            <?= $this->Form->control('reference', ['class'=>'form-control', 'label'=>'Staff Number']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('firstname', ['class'=>'form-control', 'label'=>'First Name']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('secondname', ['class'=>'form-control', 'label'=>'Second Name']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('lastname', ['class'=>'form-control', 'label'=>'Last Name']); ?>
        </div>
        <div class="col-xl-12">
            <?= $this->Form->control('occupation_id', ['options' => $occupations, 'class'=>'form-select select2', 'label'=>'Occupation']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('email', ['class'=>'form-control', 'label'=>'Email']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('phone1', ['class'=>'form-control', 'label'=>'Phone 1']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('phone2', ['class'=>'form-control', 'label'=>'Phone 2']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('birthplace', ['class'=>'form-control', 'label'=>'Birth Place']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('birthdate', ['empty' => true, 'class'=>'form-control', 'label'=>'Birth Date']); ?>
        </div>
        <div class="col-xl-1">
            <?= $this->Form->control('gender', ['options'=>$gender, 'class'=>'form-select select2', 'label'=>'Gender']); ?>
        </div>
        <div class="col-xl-3">
            <?= $this->Form->control('maritalstatus', ['options'=>$marital_status, 'class'=>'form-select select2', 'label'=>'Marital Status']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('nationality', ['class'=>'form-control', 'label'=>'Nationality']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('typeofidentitypiece', ['class'=>'form-control', 'label'=>'Type of ID. Piece']); ?>
        </div>
        <div class="col-xl-4">
            <?= $this->Form->control('identitypiecenumber', ['class'=>'form-control', 'label'=>'ID Number']); ?>
        </div>
        <div class="col-xl-3">
            <?= $this->Form->control('address_number', ['class'=>'form-control', 'label'=>'N°']); ?>
        </div>
        <div class="col-xl-3">
            <?= $this->Form->control('address_avenue', ['class'=>'form-control', 'label'=>'Avenue']); ?>
        </div>
        <div class="col-xl-3">
            <?= $this->Form->control('address_district', ['class'=>'form-control', 'label'=>'District']); ?>
        </div>
        <div class="col-xl-3">
            <?= $this->Form->control('address_municipality', ['class'=>'form-control', 'label'=>'Municipality']); ?>
        </div>
        <div class="col-xl-6">
            <?= $this->Form->control('education_level', ['class'=>'form-control', 'label'=>'Education Level']); ?>
        </div>
        <div class="col-xl-6">
            <?= $this->Form->control('education_option', ['class'=>'form-control', 'label'=>'Education Option']); ?>
        </div>
        <div class="col-xl-12">
            <?= $this->Form->control('affectation_date', ['empty' => true, 'class'=>'form-control', 'label'=>'Affectation Date']); ?>
        </div>
        <div class="col-xl-12">
            <?= $this->Form->control('bio', ['type' => 'textarea', 'empty' => true, 'class'=>'form-control', 'label'=>'Biography']); ?>
        </div>
        <div class="col-xl-6">
            <?= $this->Form->control('username', ['class'=>'form-control', 'label'=>'Username']); ?>
        </div>
        <div class="col-xl-6">
            <?= $this->Form->control('password', ['class'=>'form-control', 'label'=>'Password']); ?>
        </div>
    </div>
    <div class="mt-3 mb-3">
        <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
