<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendancestype $attendancestype
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="attendancestypes view content">
            <h3><?= h($attendancestype->name) ?></h3>
            <div class="related">
                <h4><?= __('Attendances') ?></h4>
                <?php if (!empty($attendancestype->attendances)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Attendancestype Id') ?></th>
                            <th><?= __('Check In') ?></th>
                            <th><?= __('Check Out') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($attendancestype->attendances as $attendance) : ?>
                        <tr>
                            <td><?= h($attendance->id) ?></td>
                            <td><?= h($attendance->user_id) ?></td>
                            <td><?= h($attendance->attendancestype_id) ?></td>
                            <td><?= h($attendance->check_in) ?></td>
                            <td><?= h($attendance->check_out) ?></td>
                            <td><?= h($attendance->notes) ?></td>
                            <td><?= h($attendance->created) ?></td>
                            <td><?= h($attendance->modified) ?></td>
                            <td><?= h($attendance->createdby) ?></td>
                            <td><?= h($attendance->modifiedby) ?></td>
                            <td><?= h($attendance->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Attendances', 'action' => 'view', $attendance->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Attendances', 'action' => 'edit', $attendance->id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attendances', 'action' => 'delete', $attendance->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
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
