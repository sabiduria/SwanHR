<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Holiday $holiday
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $holiday->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $holiday->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Holidays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="holidays form content">
            <?= $this->Form->create($holiday) ?>
            <fieldset>
                <legend><?= __('Edit Holiday') ?></legend>
                <?php
                    echo $this->Form->control('holidaydate', ['empty' => true]);
                    echo $this->Form->control('description');
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
