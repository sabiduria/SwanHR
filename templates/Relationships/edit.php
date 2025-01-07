<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relationship $relationship
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $relationship->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relationship->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Relationships'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="relationships form content">
            <?= $this->Form->create($relationship) ?>
            <fieldset>
                <legend><?= __('Edit Relationship') ?></legend>
                <?php
                    echo $this->Form->control('name');
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
