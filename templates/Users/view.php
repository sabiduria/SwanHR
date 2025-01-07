<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($user->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Secondname') ?></th>
                    <td><?= h($user->secondname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($user->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occupation') ?></th>
                    <td><?= $user->hasValue('occupation') ? $this->Html->link($user->occupation->name, ['controller' => 'Occupations', 'action' => 'view', $user->occupation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Maritalstatus') ?></th>
                    <td><?= h($user->maritalstatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone1') ?></th>
                    <td><?= h($user->phone1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone2') ?></th>
                    <td><?= h($user->phone2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthplace') ?></th>
                    <td><?= h($user->birthplace) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($user->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nationality') ?></th>
                    <td><?= h($user->nationality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeofidentitypiece') ?></th>
                    <td><?= h($user->typeofidentitypiece) ?></td>
                </tr>
                <tr>
                    <th><?= __('Identitypiecenumber') ?></th>
                    <td><?= h($user->identitypiecenumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Number') ?></th>
                    <td><?= h($user->address_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Avenue') ?></th>
                    <td><?= h($user->address_avenue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address District') ?></th>
                    <td><?= h($user->address_district) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Municipality') ?></th>
                    <td><?= h($user->address_municipality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Education Level') ?></th>
                    <td><?= h($user->education_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Education Option') ?></th>
                    <td><?= h($user->education_option) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($user->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($user->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthdate') ?></th>
                    <td><?= h($user->birthdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Affectation Date') ?></th>
                    <td><?= h($user->affectation_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $user->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Attendances') ?></h4>
                <?php if (!empty($user->attendances)) : ?>
                <div class="table-responsive">
                    <table class="table">
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
                        <?php foreach ($user->attendances as $attendance) : ?>
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
            <div class="related">
                <h4><?= __('Related Dependents') ?></h4>
                <?php if (!empty($user->dependents)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Relationship Id') ?></th>
                            <th><?= __('Fistname') ?></th>
                            <th><?= __('Secondname') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->dependents as $dependent) : ?>
                        <tr>
                            <td><?= h($dependent->id) ?></td>
                            <td><?= h($dependent->user_id) ?></td>
                            <td><?= h($dependent->relationship_id) ?></td>
                            <td><?= h($dependent->fistname) ?></td>
                            <td><?= h($dependent->secondname) ?></td>
                            <td><?= h($dependent->lastname) ?></td>
                            <td><?= h($dependent->gender) ?></td>
                            <td><?= h($dependent->created) ?></td>
                            <td><?= h($dependent->modified) ?></td>
                            <td><?= h($dependent->createdby) ?></td>
                            <td><?= h($dependent->modifiedby) ?></td>
                            <td><?= h($dependent->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dependents', 'action' => 'view', $dependent->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dependents', 'action' => 'edit', $dependent->id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dependents', 'action' => 'delete', $dependent->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Leaves') ?></h4>
                <?php if (!empty($user->leaves)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Leavestype Id') ?></th>
                            <th><?= __('Status Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Startdate') ?></th>
                            <th><?= __('Enddate') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Approvedby') ?></th>
                            <th><?= __('Approveddate') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->leaves as $leave) : ?>
                        <tr>
                            <td><?= h($leave->id) ?></td>
                            <td><?= h($leave->leavestype_id) ?></td>
                            <td><?= h($leave->status_id) ?></td>
                            <td><?= h($leave->user_id) ?></td>
                            <td><?= h($leave->startdate) ?></td>
                            <td><?= h($leave->enddate) ?></td>
                            <td><?= h($leave->reason) ?></td>
                            <td><?= h($leave->approvedby) ?></td>
                            <td><?= h($leave->approveddate) ?></td>
                            <td><?= h($leave->created) ?></td>
                            <td><?= h($leave->modified) ?></td>
                            <td><?= h($leave->createdby) ?></td>
                            <td><?= h($leave->modifiedby) ?></td>
                            <td><?= h($leave->deleted) ?></td>
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
                <h4><?= __('Related Leavesbalances') ?></h4>
                <?php if (!empty($user->leavesbalances)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Leavestype Id') ?></th>
                            <th><?= __('Availablebalance') ?></th>
                            <th><?= __('Balanceyear') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->leavesbalances as $leavesbalance) : ?>
                        <tr>
                            <td><?= h($leavesbalance->id) ?></td>
                            <td><?= h($leavesbalance->user_id) ?></td>
                            <td><?= h($leavesbalance->leavestype_id) ?></td>
                            <td><?= h($leavesbalance->availablebalance) ?></td>
                            <td><?= h($leavesbalance->balanceyear) ?></td>
                            <td><?= h($leavesbalance->created) ?></td>
                            <td><?= h($leavesbalance->modified) ?></td>
                            <td><?= h($leavesbalance->createdby) ?></td>
                            <td><?= h($leavesbalance->modifiedby) ?></td>
                            <td><?= h($leavesbalance->deleted) ?></td>
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
            <div class="related">
                <h4><?= __('Related Proexperiences') ?></h4>
                <?php if (!empty($user->proexperiences)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Startdate') ?></th>
                            <th><?= __('Endate') ?></th>
                            <th><?= __('Institution') ?></th>
                            <th><?= __('Occupation') ?></th>
                            <th><?= __('Comments') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->proexperiences as $proexperience) : ?>
                        <tr>
                            <td><?= h($proexperience->id) ?></td>
                            <td><?= h($proexperience->user_id) ?></td>
                            <td><?= h($proexperience->startdate) ?></td>
                            <td><?= h($proexperience->endate) ?></td>
                            <td><?= h($proexperience->institution) ?></td>
                            <td><?= h($proexperience->occupation) ?></td>
                            <td><?= h($proexperience->comments) ?></td>
                            <td><?= h($proexperience->created) ?></td>
                            <td><?= h($proexperience->modified) ?></td>
                            <td><?= h($proexperience->createdby) ?></td>
                            <td><?= h($proexperience->modifiedby) ?></td>
                            <td><?= h($proexperience->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Proexperiences', 'action' => 'view', $proexperience->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Proexperiences', 'action' => 'edit', $proexperience->id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Proexperiences', 'action' => 'delete', $proexperience->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
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