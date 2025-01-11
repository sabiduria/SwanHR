<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Leave> $leaves
 */
?>
<div class="mt-3">
    <h3><?= __('Leaves') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('leaves type') ?></th>
                    <th><?= $this->Paginator->sort('status_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('start date') ?></th>
                    <th><?= $this->Paginator->sort('end date') ?></th>
                    <th><?= $this->Paginator->sort('approved by') ?></th>
                    <th><?= $this->Paginator->sort('approved date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leaves as $leave): ?>
                <tr>
                    <td><?= $this->Number->format($leave->id) ?></td>
                    <td><?= $leave->hasValue('leavestype') ? $this->Html->link($leave->leavestype->name, ['controller' => 'Leavestypes', 'action' => 'view', $leave->leavestype->id]) : '' ?></td>
                    <td><?= $leave->hasValue('status') ? $this->Html->link($leave->status->name, ['controller' => 'Statuses', 'action' => 'view', $leave->status->id]) : '' ?></td>
                    <td><?= $leave->hasValue('user') ? $this->Html->link($leave->user->firstname.' '.$leave->user->secondname.' '.$leave->user->lastname, ['controller' => 'Users', 'action' => 'view', $leave->user->id]) : '' ?></td>
                    <td><?= date('Y-m-d', strtotime($leave->startdate)) ?></td>
                    <td><?= date('Y-m-d', strtotime($leave->enddate)) ?></td>
                    <td><?= h($leave->approvedby) ?></td>
                    <td><?= h($leave->approveddate) ?></td>
                    <td><?= h($leave->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $leave->id], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leave->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leave->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
