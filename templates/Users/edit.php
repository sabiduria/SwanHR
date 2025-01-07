<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $occupations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('secondname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('occupation_id', ['options' => $occupations]);
                    echo $this->Form->control('maritalstatus');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone1');
                    echo $this->Form->control('phone2');
                    echo $this->Form->control('birthplace');
                    echo $this->Form->control('birthdate', ['empty' => true]);
                    echo $this->Form->control('gender');
                    echo $this->Form->control('nationality');
                    echo $this->Form->control('typeofidentitypiece');
                    echo $this->Form->control('identitypiecenumber');
                    echo $this->Form->control('address_number');
                    echo $this->Form->control('address_avenue');
                    echo $this->Form->control('address_district');
                    echo $this->Form->control('address_municipality');
                    echo $this->Form->control('education_level');
                    echo $this->Form->control('education_option');
                    echo $this->Form->control('affectation_date', ['empty' => true]);
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('createdby');
                    echo $this->Form->control('modifiedby');
                    echo $this->Form->control('deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
