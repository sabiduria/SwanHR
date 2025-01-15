<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Attendancestype> $attendancestypes
 */
?>
<div class="mt-3">
    <?= $this->Html->link(__('New Attendances Type'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm']) ?>
    <h3><?= __('Attendances Types') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('penality') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attendancestypes as $attendancestype): ?>
                <tr>
                    <td><?= $this->Number->format($attendancestype->id) ?></td>
                    <td><?= h($attendancestype->name) ?></td>
                    <td><?= $attendancestype->penality === null ? '' : $this->Number->format($attendancestype->penality) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendancestype->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendancestype->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
