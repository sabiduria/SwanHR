<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Payslip> $payslips
 */
?>
<div class="mt-3">
    <?= $this->Html->link(__('New Payslip'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm']) ?>
    <h3><?= __('Payslips') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('payroll_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('hour_sup') ?></th>
                    <th><?= $this->Paginator->sort('nber_days') ?></th>
                    <th><?= $this->Paginator->sort('primes') ?></th>
                    <th><?= $this->Paginator->sort('bank') ?></th>
                    <th><?= $this->Paginator->sort('banck_account') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payslips as $payslip): ?>
                <tr>
                    <td><?= $this->Number->format($payslip->id) ?></td>
                    <td><?= $payslip->hasValue('payroll') ? $this->Html->link($payslip->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $payslip->payroll->id]) : '' ?></td>
                    <td><?= $payslip->hasValue('user') ? $this->Html->link($payslip->user->Array, ['controller' => 'Users', 'action' => 'view', $payslip->user->id]) : '' ?></td>
                    <td><?= $payslip->hour_sup === null ? '' : $this->Number->format($payslip->hour_sup) ?></td>
                    <td><?= $payslip->nber_days === null ? '' : $this->Number->format($payslip->nber_days) ?></td>
                    <td><?= $payslip->primes === null ? '' : $this->Number->format($payslip->primes) ?></td>
                    <td><?= h($payslip->bank) ?></td>
                    <td><?= h($payslip->banck_account) ?></td>
                    <td><?= h($payslip->created) ?></td>
                    <td><?= h($payslip->modified) ?></td>
                    <td><?= h($payslip->createdby) ?></td>
                    <td><?= h($payslip->modifiedby) ?></td>
                    <td><?= h($payslip->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $payslip->id], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payslip->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payslip->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>