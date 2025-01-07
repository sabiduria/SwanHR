<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Occupation $occupation
 */
?>
<div class="mt-3">
    <?= $this->Form->create($occupation) ?>
        <div class="row gy-2">
            <h3><?= __('Edit Occupation') ?></h3>
            <div class="col-xl-12">
                <?= $this->Form->control('name', ['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
