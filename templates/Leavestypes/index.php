<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Leavestype> $leavestypes
 */
?>
<div class="leavestypes index content">
    <?= $this->Html->link(__('New Leavestype'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Leavestypes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('maxdaysperyear') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leavestypes as $leavestype): ?>
                <tr>
                    <td><?= $this->Number->format($leavestype->id) ?></td>
                    <td><?= h($leavestype->name) ?></td>
                    <td><?= $leavestype->maxdaysperyear === null ? '' : $this->Number->format($leavestype->maxdaysperyear) ?></td>
                    <td><?= h($leavestype->created) ?></td>
                    <td><?= h($leavestype->modified) ?></td>
                    <td><?= h($leavestype->createdby) ?></td>
                    <td><?= h($leavestype->modifiedby) ?></td>
                    <td><?= h($leavestype->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $leavestype->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leavestype->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leavestype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leavestype->id)]) ?>
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