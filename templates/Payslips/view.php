<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payslip $payslip
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="payslips view content">
            <h3><?= h($payslip->id) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Payroll') ?></th>
                    <td><?= $payslip->hasValue('payroll') ? $this->Html->link($payslip->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $payslip->payroll->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $payslip->hasValue('user') ? $this->Html->link($payslip->user->Array, ['controller' => 'Users', 'action' => 'view', $payslip->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank') ?></th>
                    <td><?= h($payslip->bank) ?></td>
                </tr>
                <tr>
                    <th><?= __('Banck Account') ?></th>
                    <td><?= h($payslip->banck_account) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($payslip->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($payslip->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($payslip->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hour Sup') ?></th>
                    <td><?= $payslip->hour_sup === null ? '' : $this->Number->format($payslip->hour_sup) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nber Days') ?></th>
                    <td><?= $payslip->nber_days === null ? '' : $this->Number->format($payslip->nber_days) ?></td>
                </tr>
                <tr>
                    <th><?= __('Primes') ?></th>
                    <td><?= $payslip->primes === null ? '' : $this->Number->format($payslip->primes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($payslip->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($payslip->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $payslip->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>