<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leavesbalance $leavesbalance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Leavesbalance'), ['action' => 'edit', $leavesbalance->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Leavesbalance'), ['action' => 'delete', $leavesbalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leavesbalance->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Leavesbalances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Leavesbalance'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="leavesbalances view content">
            <h3><?= h($leavesbalance->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $leavesbalance->hasValue('user') ? $this->Html->link($leavesbalance->user->id, ['controller' => 'Users', 'action' => 'view', $leavesbalance->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Leavestype') ?></th>
                    <td><?= $leavesbalance->hasValue('leavestype') ? $this->Html->link($leavesbalance->leavestype->name, ['controller' => 'Leavestypes', 'action' => 'view', $leavesbalance->leavestype->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($leavesbalance->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($leavesbalance->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($leavesbalance->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Availablebalance') ?></th>
                    <td><?= $leavesbalance->availablebalance === null ? '' : $this->Number->format($leavesbalance->availablebalance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Balanceyear') ?></th>
                    <td><?= $leavesbalance->balanceyear === null ? '' : $this->Number->format($leavesbalance->balanceyear) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($leavesbalance->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($leavesbalance->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $leavesbalance->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>