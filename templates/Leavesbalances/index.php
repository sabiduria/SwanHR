<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Leavesbalance> $leavesbalances
 */
?>
<div class="leavesbalances index content">
    <?= $this->Html->link(__('New Leavesbalance'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Leavesbalances') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('leavestype_id') ?></th>
                    <th><?= $this->Paginator->sort('availablebalance') ?></th>
                    <th><?= $this->Paginator->sort('balanceyear') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leavesbalances as $leavesbalance): ?>
                <tr>
                    <td><?= $this->Number->format($leavesbalance->id) ?></td>
                    <td><?= $leavesbalance->hasValue('user') ? $this->Html->link($leavesbalance->user->id, ['controller' => 'Users', 'action' => 'view', $leavesbalance->user->id]) : '' ?></td>
                    <td><?= $leavesbalance->hasValue('leavestype') ? $this->Html->link($leavesbalance->leavestype->name, ['controller' => 'Leavestypes', 'action' => 'view', $leavesbalance->leavestype->id]) : '' ?></td>
                    <td><?= $leavesbalance->availablebalance === null ? '' : $this->Number->format($leavesbalance->availablebalance) ?></td>
                    <td><?= $leavesbalance->balanceyear === null ? '' : $this->Number->format($leavesbalance->balanceyear) ?></td>
                    <td><?= h($leavesbalance->created) ?></td>
                    <td><?= h($leavesbalance->modified) ?></td>
                    <td><?= h($leavesbalance->createdby) ?></td>
                    <td><?= h($leavesbalance->modifiedby) ?></td>
                    <td><?= h($leavesbalance->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $leavesbalance->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leavesbalance->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leavesbalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leavesbalance->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>