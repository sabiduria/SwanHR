<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payrollinfo $payrollinfo
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="payrollinfos view content">
            <h3><?= h($payrollinfo->id) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $payrollinfo->hasValue('user') ? $this->Html->link($payrollinfo->user->Array, ['controller' => 'Users', 'action' => 'view', $payrollinfo->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($payrollinfo->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($payrollinfo->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($payrollinfo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salary Per Day') ?></th>
                    <td><?= $payrollinfo->salary_per_day === null ? '' : $this->Number->format($payrollinfo->salary_per_day) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($payrollinfo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($payrollinfo->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $payrollinfo->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>