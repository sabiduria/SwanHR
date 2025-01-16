<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leavestype $leavestype
 */

use App\Controller\GeneralController;

?>
<div class="row">
    <div class="column column-80">
        <div class="leavestypes view content">
            <h3><?= h($leavestype->name) ?></h3>
            <table class="table table-bordered">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($leavestype->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($leavestype->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($leavestype->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($leavestype->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maxdaysperyear') ?></th>
                    <td><?= $leavestype->maxdaysperyear === null ? '' : $this->Number->format($leavestype->maxdaysperyear) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($leavestype->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($leavestype->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Leaves') ?></h4>
                <?php if (!empty($leavestype->leaves)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Leaves type') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Staff Member') ?></th>
                            <th><?= __('Start date') ?></th>
                            <th><?= __('End date') ?></th>
                            <th><?= __('Approved by') ?></th>
                            <th><?= __('Approved date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($leavestype->leaves as $leave) : ?>
                        <tr>
                            <td><?= h($leave->id) ?></td>
                            <td><?= GeneralController::getNameOf($leave->leavestype_id, 'Leavestypes') ?></td>
                            <td><?= GeneralController::getNameOf($leave->status_id, 'Statuses') ?></td>
                            <td><?= GeneralController::getUserNameOf($leave->user_id) ?></td>
                            <td><?= h($leave->startdate) ?></td>
                            <td><?= h($leave->enddate) ?></td>
                            <td><?= h($leave->approvedby) ?></td>
                            <td><?= h($leave->approveddate) ?></td>
                            <td><?= h($leave->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Leaves', 'action' => 'view', $leave->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Leaves', 'action' => 'edit', $leave->id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leaves', 'action' => 'delete', $leave->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Leaves balances') ?></h4>
                <?php if (!empty($leavestype->leavesbalances)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Staff Member') ?></th>
                            <th><?= __('Leaves type') ?></th>
                            <th><?= __('Available balance') ?></th>
                            <th><?= __('Balance year') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($leavestype->leavesbalances as $leavesbalance) : ?>
                        <tr>
                            <td><?= h($leavesbalance->id) ?></td>
                            <td><?= GeneralController::getUserNameOf($leavesbalance->user_id) ?></td>
                            <td><?= GeneralController::getNameOf($leavesbalance->leavestype_id, 'Leavestypes') ?></td>
                            <td><?= h($leavesbalance->availablebalance) ?></td>
                            <td><?= h($leavesbalance->balanceyear) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Leavesbalances', 'action' => 'view', $leavesbalance->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Leavesbalances', 'action' => 'edit', $leavesbalance->id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leavesbalances', 'action' => 'delete', $leavesbalance->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
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
