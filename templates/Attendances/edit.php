<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance $attendance
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $attendancestypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attendance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Attendances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="attendances form content">
            <?= $this->Form->create($attendance) ?>
            <fieldset>
                <legend><?= __('Edit Attendance') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('attendancestype_id', ['options' => $attendancestypes]);
                    echo $this->Form->control('check_in', ['empty' => true]);
                    echo $this->Form->control('check_out', ['empty' => true]);
                    echo $this->Form->control('notes');
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
