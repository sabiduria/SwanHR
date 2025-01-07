<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Holiday $holiday
 */
?>
<div class="mt-3">
    <?= $this->Form->create($holiday) ?>
        <div class="row gy-2">
            <h3><?= __('Edit Holiday') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('holidaydate', ['empty' => true, 'class'=>'form-control']); ?>
            </div>
            <div class="col-xl-12">
                <?= $this->Form->control('description', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
