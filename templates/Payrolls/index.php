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
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
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
                    <td><?= h($payroll->actived) ? 'Active' : 'Pending' ?></td>
                    <td><?= h($payroll->created) ?></td>
                    <td><?= h($payroll->createdby) ?></td>
                    <td class="actions">
                        <?php if ($payroll->actived == 0): ?>
                            <?= $this->Html->link(__('Generate Payslips'), ['action' => 'generate', $payroll->id], ['class' => 'btn btn-success btn-sm']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payroll->id], ['class' => 'btn btn-primary btn-sm']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payroll->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                        <?php else: ?>
                            <?= $this->Html->link(__('Open Payslips'), ['action' => 'view', $payroll->id], ['class' => 'btn btn-success btn-sm']) ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
