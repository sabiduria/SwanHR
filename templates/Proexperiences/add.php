<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proexperience $proexperience
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Proexperiences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="proexperiences form content">
            <?= $this->Form->create($proexperience) ?>
            <fieldset>
                <legend><?= __('Add Proexperience') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('startdate', ['empty' => true]);
                    echo $this->Form->control('endate', ['empty' => true]);
                    echo $this->Form->control('institution');
                    echo $this->Form->control('occupation');
                    echo $this->Form->control('comments');
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
