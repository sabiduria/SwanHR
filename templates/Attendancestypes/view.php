<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendancestype $attendancestype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Attendancestype'), ['action' => 'edit', $attendancestype->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Attendancestype'), ['action' => 'delete', $attendancestype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendancestype->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Attendancestypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Attendancestype'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="attendancestypes view content">
            <h3><?= h($attendancestype->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($attendancestype->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($attendancestype->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($attendancestype->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($attendancestype->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Penality') ?></th>
                    <td><?= $attendancestype->penality === null ? '' : $this->Number->format($attendancestype->penality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($attendancestype->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($attendancestype->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $attendancestype->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Attendances') ?></h4>
                <?php if (!empty($attendancestype->attendances)) : ?>
                <div class="table-responsive">
                    <table>
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
                                <?= $this->Html->link(__('View'), ['controller' => 'Attendances', 'action' => 'view', $attendance->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Attendances', 'action' => 'edit', $attendance->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attendances', 'action' => 'delete', $attendance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->id)]) ?>
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