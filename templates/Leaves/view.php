<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 */
?>
<div class="row mt-3">
    <div class="column column-80">
        <div class="leaves view content">
            <div class="row">
                <div class="offset-6 col-sm-6">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th><strong>Approbation Information</strong></th>
                            <th></th>
                            <?php if (($leave->approvedby) == ''):?>
                                <th><strong>Actions</strong></th>
                            <?php endif;?>
                        </tr>
                        </thead>
                        <tr>
                            <th><?= __('Approved by') ?></th>
                            <td><?= h($leave->approvedby) == '' ? '<span class="badge bg-warning rounded-pill align-items-center fs-11">Waiting</span>' : h($leave->approvedby) ?></td>
                            <?php if (($leave->approvedby) == ''):?>
                                <td rowspan="2">
                                    <?= $this->Html->link(__('<i class="fa-classic fa-thin fa-check fa-fw"></i>'), ['action' => 'approve', $leave->id, 2], ['class' => 'btn btn-success', 'escape' => false]) ?>
                                    <?= $this->Html->link(__('<i class="fa-classic fa-thin fa-xmark fa-fw"></i>'), ['action' => 'approve', $leave->id, 3], ['class' => 'btn btn-danger', 'escape' => false]) ?>
                                </td>
                            <?php endif;?>
                        </tr>
                        <tr>
                            <th><?= __('Approved date') ?></th>
                            <td><?= h($leave->approveddate) == '' ? '<span class="badge bg-warning rounded-pill align-items-center fs-11">Waiting</span>' : date('Y-m-d', strtotime($leave->approveddate)) ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Leaves type') ?></th>
                            <td><?= $leave->hasValue('leavestype') ? $this->Html->link($leave->leavestype->name, ['controller' => 'Leavestypes', 'action' => 'view', $leave->leavestype->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Status') ?></th>
                            <td><?= $leave->hasValue('status') ? $this->Html->link($leave->status->name, ['controller' => 'Statuses', 'action' => 'view', $leave->status->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Requestor') ?></th>
                            <td><?= $leave->hasValue('user') ? $this->Html->link($leave->user->firstname.' '.$leave->user->secondname.' '.$leave->user->lastname, ['controller' => 'Users', 'action' => 'view', $leave->user->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Period') ?></th>
                            <td><?= date('Y-m-d', strtotime($leave->startdate)) ?> To <?= date('Y-m-d', strtotime($leave->enddate)) ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Created by') ?></th>
                            <td><?= h($leave->createdby) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified by') ?></th>
                            <td><?= h($leave->modifiedby) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                            <td><?= date('Y-m-d H:i', strtotime($leave->created)) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= date('Y-m-d H:i', strtotime($leave->modified)) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="text">
                <strong><?= __('Reason') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($leave->reason)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
