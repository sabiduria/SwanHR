<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll $payroll
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="payrolls view content">
            <h3><?= h($payroll->id) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Payroll Period') ?></th>
                    <td><?= h($payroll->payroll_period) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($payroll->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($payroll->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($payroll->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($payroll->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($payroll->end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($payroll->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($payroll->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Actived') ?></th>
                    <td><?= $payroll->actived ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $payroll->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Payslips') ?></h4>
                <?php if (!empty($payroll->payslips)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Payroll Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Hour Sup') ?></th>
                            <th><?= __('Nber Days') ?></th>
                            <th><?= __('Primes') ?></th>
                            <th><?= __('Bank') ?></th>
                            <th><?= __('Banck Account') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($payroll->payslips as $payslip) : ?>
                        <tr>
                            <td><?= h($payslip->id) ?></td>
                            <td><?= h($payslip->payroll_id) ?></td>
                            <td><?= h($payslip->user_id) ?></td>
                            <td><?= h($payslip->hour_sup) ?></td>
                            <td><?= h($payslip->nber_days) ?></td>
                            <td><?= h($payslip->primes) ?></td>
                            <td><?= h($payslip->bank) ?></td>
                            <td><?= h($payslip->banck_account) ?></td>
                            <td><?= h($payslip->created) ?></td>
                            <td><?= h($payslip->modified) ?></td>
                            <td><?= h($payslip->createdby) ?></td>
                            <td><?= h($payslip->modifiedby) ?></td>
                            <td><?= h($payslip->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Payslips', 'action' => 'view', $payslip->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Payslips', 'action' => 'edit', $payslip->id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payslips', 'action' => 'delete', $payslip->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
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