<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leavesbalance $leavesbalance
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $leavestypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $leavesbalance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $leavesbalance->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Leavesbalances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="leavesbalances form content">
            <?= $this->Form->create($leavesbalance) ?>
            <fieldset>
                <legend><?= __('Edit Leavesbalance') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('leavestype_id', ['options' => $leavestypes]);
                    echo $this->Form->control('availablebalance');
                    echo $this->Form->control('balanceyear');
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
