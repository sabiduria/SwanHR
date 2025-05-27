<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Payrollinfo> $payrollinfos
 */
?>
<div class="mt-3">
    <?= $this->Html->link(__('New Payroll Info'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm']) ?>
    <h3><?= __('Payroll Infos') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('salary_per_day') ?></th>
                    <th><?= $this->Paginator->sort('last edited') ?></th>
                    <th><?= $this->Paginator->sort('edited by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payrollinfos as $payrollinfo): ?>
                <tr>
                    <td><?= $this->Number->format($payrollinfo->id) ?></td>
                    <td><?= $payrollinfo->user->firstname . ' ' . $payrollinfo->user->secondname . ' ' . $payrollinfo->user->lastname ?></td>
                    <td><?= $payrollinfo->salary_per_day === null ? '' : $this->Number->format($payrollinfo->salary_per_day) ?></td>
                    <td><?= h($payrollinfo->modified) ?></td>
                    <td><?= h($payrollinfo->modifiedby) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payrollinfo->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payrollinfo->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
