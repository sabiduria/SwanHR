<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Leave> $leaves
 */
?>
<div class="leaves index content">
    <?= $this->Html->link(__('New Leave'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Leaves') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('leavestype_id') ?></th>
                    <th><?= $this->Paginator->sort('status_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('startdate') ?></th>
                    <th><?= $this->Paginator->sort('enddate') ?></th>
                    <th><?= $this->Paginator->sort('approvedby') ?></th>
                    <th><?= $this->Paginator->sort('approveddate') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leaves as $leave): ?>
                <tr>
                    <td><?= $this->Number->format($leave->id) ?></td>
                    <td><?= $leave->hasValue('leavestype') ? $this->Html->link($leave->leavestype->name, ['controller' => 'Leavestypes', 'action' => 'view', $leave->leavestype->id]) : '' ?></td>
                    <td><?= $leave->hasValue('status') ? $this->Html->link($leave->status->name, ['controller' => 'Statuses', 'action' => 'view', $leave->status->id]) : '' ?></td>
                    <td><?= $leave->hasValue('user') ? $this->Html->link($leave->user->id, ['controller' => 'Users', 'action' => 'view', $leave->user->id]) : '' ?></td>
                    <td><?= h($leave->startdate) ?></td>
                    <td><?= h($leave->enddate) ?></td>
                    <td><?= h($leave->approvedby) ?></td>
                    <td><?= h($leave->approveddate) ?></td>
                    <td><?= h($leave->created) ?></td>
                    <td><?= h($leave->modified) ?></td>
                    <td><?= h($leave->createdby) ?></td>
                    <td><?= h($leave->modifiedby) ?></td>
                    <td><?= h($leave->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $leave->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leave->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leave->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leave->id)]) ?>
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