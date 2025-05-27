<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll $payroll
 */

use App\Controller\UsersController;

?>
<div class="row">
    <div class="column column-80">
        <div class="payrolls view content">
            <h3>Payroll <?= h($payroll->payroll_period) ?></h3>
            <hr>
            <div class="related">
                <h4><?= __('Related Payslips') ?></h4>
                <?php if (!empty($payroll->payslips)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee') ?></th>
                            <th><?= __('Hours Sup.') ?></th>
                            <th><?= __('Number of Days') ?></th>
                            <th><?= __('Bonus') ?></th>
                            <th><?= __('Salary') ?></th>
                            <th><?= __('Payment State') ?></th>
                            <th><?= __('Payslip State') ?></th>
                            <th><?= __('Last Edit') ?></th>
                            <th><?= __('Edited By') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($payroll->payslips as $payslip) : ?>
                        <tr>
                            <td><?= h($payslip->id) ?></td>
                            <td><?= UsersController::getUserNameOf($payslip->user_id) ?></td>
                            <td><?= h($payslip->hour_sup) ?></td>
                            <td><?= h($payslip->nber_days) ?></td>
                            <td><?= h($payslip->primes) ?></td>
                            <td><?= h($payslip->salary) ?></td>
                            <td><?= h($payslip->payed) ? 'Paid' : 'Unpaid' ?></td>
                            <td><?= h($payslip->published) ? 'Published' : 'Draft' ?></td>
                            <td><?= h($payslip->modified) ?></td>
                            <td><?= h($payslip->modifiedby) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Payslips', 'action' => 'view', $payslip->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Html->link(__('Adjust'), ['controller' => 'Payslips', 'action' => 'edit', $payslip->id], ['class' => 'btn btn-primary btn-sm']) ?>
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
