<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Occupation> $occupations
 */
?>
<div class="occupations index content">
    <?= $this->Html->link(__('New Occupation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Occupations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($occupations as $occupation): ?>
                <tr>
                    <td><?= $this->Number->format($occupation->id) ?></td>
                    <td><?= h($occupation->name) ?></td>
                    <td><?= h($occupation->created) ?></td>
                    <td><?= h($occupation->modified) ?></td>
                    <td><?= h($occupation->createdby) ?></td>
                    <td><?= h($occupation->modifiedby) ?></td>
                    <td><?= h($occupation->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $occupation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $occupation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $occupation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occupation->id)]) ?>
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