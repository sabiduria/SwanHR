<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dependent> $dependents
 */
?>
<div class="dependents index content">
    <?= $this->Html->link(__('New Dependent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dependents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('relationship_id') ?></th>
                    <th><?= $this->Paginator->sort('fistname') ?></th>
                    <th><?= $this->Paginator->sort('secondname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dependents as $dependent): ?>
                <tr>
                    <td><?= $this->Number->format($dependent->id) ?></td>
                    <td><?= $dependent->hasValue('user') ? $this->Html->link($dependent->user->id, ['controller' => 'Users', 'action' => 'view', $dependent->user->id]) : '' ?></td>
                    <td><?= $dependent->hasValue('relationship') ? $this->Html->link($dependent->relationship->name, ['controller' => 'Relationships', 'action' => 'view', $dependent->relationship->id]) : '' ?></td>
                    <td><?= h($dependent->fistname) ?></td>
                    <td><?= h($dependent->secondname) ?></td>
                    <td><?= h($dependent->lastname) ?></td>
                    <td><?= h($dependent->gender) ?></td>
                    <td><?= h($dependent->created) ?></td>
                    <td><?= h($dependent->modified) ?></td>
                    <td><?= h($dependent->createdby) ?></td>
                    <td><?= h($dependent->modifiedby) ?></td>
                    <td><?= h($dependent->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dependent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dependent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dependent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependent->id)]) ?>
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