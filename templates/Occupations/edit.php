<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Occupation $occupation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $occupation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $occupation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Occupations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="occupations form content">
            <?= $this->Form->create($occupation) ?>
            <fieldset>
                <legend><?= __('Edit Occupation') ?></legend>
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
