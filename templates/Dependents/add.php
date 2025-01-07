<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependent $dependent
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $relationships
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Dependents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dependents form content">
            <?= $this->Form->create($dependent) ?>
            <fieldset>
                <legend><?= __('Add Dependent') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('relationship_id', ['options' => $relationships]);
                    echo $this->Form->control('fistname');
                    echo $this->Form->control('secondname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('gender');
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
