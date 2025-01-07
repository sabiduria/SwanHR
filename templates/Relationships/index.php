<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Relationship> $relationships
 */
?>
<div class="relationships index content">
    <?= $this->Html->link(__('New Relationship'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Relationships') ?></h3>
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
                <?php foreach ($relationships as $relationship): ?>
                <tr>
                    <td><?= $this->Number->format($relationship->id) ?></td>
                    <td><?= h($relationship->name) ?></td>
                    <td><?= h($relationship->created) ?></td>
                    <td><?= h($relationship->modified) ?></td>
                    <td><?= h($relationship->createdby) ?></td>
                    <td><?= h($relationship->modifiedby) ?></td>
                    <td><?= h($relationship->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $relationship->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $relationship->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $relationship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relationship->id)]) ?>
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