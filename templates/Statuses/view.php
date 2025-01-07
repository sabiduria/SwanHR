<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status $status
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Status'), ['action' => 'edit', $status->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Status'), ['action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="statuses view content">
            <h3><?= h($status->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($status->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tables') ?></th>
                    <td><?= h($status->tables) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($status->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($status->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($status->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($status->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($status->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $status->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Leaves') ?></h4>
                <?php if (!empty($status->leaves)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Leavestype Id') ?></th>
                            <th><?= __('Status Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Startdate') ?></th>
                            <th><?= __('Enddate') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Approvedby') ?></th>
                            <th><?= __('Approveddate') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($status->leaves as $leave) : ?>
                        <tr>
                            <td><?= h($leave->id) ?></td>
                            <td><?= h($leave->leavestype_id) ?></td>
                            <td><?= h($leave->status_id) ?></td>
                            <td><?= h($leave->user_id) ?></td>
                            <td><?= h($leave->startdate) ?></td>
                            <td><?= h($leave->enddate) ?></td>
                            <td><?= h($leave->reason) ?></td>
                            <td><?= h($leave->approvedby) ?></td>
                            <td><?= h($leave->approveddate) ?></td>
                            <td><?= h($leave->created) ?></td>
                            <td><?= h($leave->modified) ?></td>
                            <td><?= h($leave->createdby) ?></td>
                            <td><?= h($leave->modifiedby) ?></td>
                            <td><?= h($leave->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Leaves', 'action' => 'view', $leave->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Leaves', 'action' => 'edit', $leave->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leaves', 'action' => 'delete', $leave->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leave->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>