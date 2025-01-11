<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Leavesbalance> $leavesbalances
 */
?>
<div class="mt-3">
    <h3><?= __('Leaves balances') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Staff Member') ?></th>
                    <th><?= $this->Paginator->sort('leaves type') ?></th>
                    <th><?= $this->Paginator->sort('available balance') ?></th>
                    <th><?= $this->Paginator->sort('balance year') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leavesbalances as $leavesbalance): ?>
                <tr>
                    <td><?= $this->Number->format($leavesbalance->id) ?></td>
                    <td><?= $leavesbalance->hasValue('user') ? $this->Html->link($leavesbalance->user->firstname.' '.$leavesbalance->user->secondname.' '.$leavesbalance->user->lastname, ['controller' => 'Users', 'action' => 'view', $leavesbalance->user->id]) : '' ?></td>
                    <td><?= $leavesbalance->hasValue('leavestype') ? $this->Html->link($leavesbalance->leavestype->name, ['controller' => 'Leavestypes', 'action' => 'view', $leavesbalance->leavestype->id]) : '' ?></td>
                    <td><?= $leavesbalance->availablebalance === null ? '' : $this->Number->format($leavesbalance->availablebalance) ?></td>
                    <td><?= $leavesbalance->balanceyear === null ? '' : $leavesbalance->balanceyear ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leavesbalance->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leavesbalance->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
