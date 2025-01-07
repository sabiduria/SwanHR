<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leavestype $leavestype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Leavestypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="leavestypes form content">
            <?= $this->Form->create($leavestype) ?>
            <fieldset>
                <legend><?= __('Add Leavestype') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('maxdaysperyear');
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
