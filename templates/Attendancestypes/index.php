<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Attendancestype> $attendancestypes
 */
?>
<div class="attendancestypes index content">
    <?= $this->Html->link(__('New Attendancestype'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Attendancestypes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('penality') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attendancestypes as $attendancestype): ?>
                <tr>
                    <td><?= $this->Number->format($attendancestype->id) ?></td>
                    <td><?= h($attendancestype->name) ?></td>
                    <td><?= $attendancestype->penality === null ? '' : $this->Number->format($attendancestype->penality) ?></td>
                    <td><?= h($attendancestype->created) ?></td>
                    <td><?= h($attendancestype->modified) ?></td>
                    <td><?= h($attendancestype->createdby) ?></td>
                    <td><?= h($attendancestype->modifiedby) ?></td>
                    <td><?= h($attendancestype->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $attendancestype->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendancestype->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendancestype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendancestype->id)]) ?>
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