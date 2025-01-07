<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relationship $relationship
 */
?>
<div class="mt-3">
    <?= $this->Form->create($relationship) ?>
        <div class="row gy-2">
            <h3><?= __('Add Relationship') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('name', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
