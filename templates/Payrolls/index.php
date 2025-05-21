<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Payroll> $payrolls
 */
?>
<div class="mt-3">
    <?= $this->Html->link(__('New Payroll'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm']) ?>
    <h3><?= __('Payrolls') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('payroll_period') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('actived') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payrolls as $payroll): ?>
                <tr>
                    <td><?= $this->Number->format($payroll->id) ?></td>
                    <td><?= h($payroll->payroll_period) ?></td>
                    <td><?= h($payroll->start_date) ?></td>
                    <td><?= h($payroll->end_date) ?></td>
                    <td><?= h($payroll->actived) ?></td>
                    <td><?= h($payroll->created) ?></td>
                    <td><?= h($payroll->modified) ?></td>
                    <td><?= h($payroll->createdby) ?></td>
                    <td><?= h($payroll->modifiedby) ?></td>
                    <td><?= h($payroll->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $payroll->id], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payroll->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payroll->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>