<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use App\Controller\GeneralController;

$this->assign('title', 'test');
?>
<div class="row mt-3">
    <div class="col-xl-12">
        <div class="card custom-card profile-card">
            <div class="profile-banner-img">
                <?= $this->Html->image('media-3', ['class'=>'card-img-top']) ?>
            </div>
            <div class="card-body pb-0 position-relative">
                <div class="row profile-content">
                    <div class="col-xl-3">
                        <div class="card custom-card overflow-hidden border">
                            <div class="card-body border-bottom border-block-end-dashed">
                                <div class="text-center">
                                  <span class="avatar avatar-xxl avatar-rounded online mb-3">
                                      <?= $this->Html->image('11', ['class'=>'card-img-top']) ?>
                                  </span>
                                    <h5 class="fw-semibold mb-1"><?= h($user->firstname) ?> <?= h($user->secondname) ?> <?= h($user->lastname) ?></h5>
                                    <span class="d-block fw-medium text-muted mb-2"><?= $user->hasValue('occupation') ? $this->Html->link($user->occupation->name, ['controller' => 'Occupations', 'action' => 'view', $user->occupation->id]) : '' ?></span>
                                </div>
                            </div>
                            <div class="p-3 pb-1 d-flex flex-wrap justify-content-between">
                                <div class="fw-medium fs-15 text-primary1"> Basic Info : </div>
                            </div>
                            <div class="card-body border-bottom border-block-end-dashed p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item pt-2 border-0">
                                        <div>
                                            <span class="fw-medium me-2">Gender :</span>
                                            <span class="text-muted"><?= h($user->gender) ?></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item pt-2 border-0">
                                        <div>
                                            <span class="fw-medium me-2">Birthdate :</span>
                                            <span class="text-muted"><?= date('Y-m-d', strtotime($user->birthdate)) ?></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item pt-2 border-0">
                                        <div>
                                            <span class="fw-medium me-2">Birth Place :</span>
                                            <span class="text-muted"><?= h($user->birthplace) ?></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item pt-2 border-0">
                                        <div>
                                            <span class="fw-medium me-2">Email :</span>
                                            <span class="text-muted"><?= h($user->email) ?></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item pt-2 border-0">
                                        <div>
                                            <span class="fw-medium me-2">Typ. Of ID Piece :</span>
                                            <span class="text-muted"><?= h($user->typeofidentitypiece) ?></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item pt-2 border-0">
                                        <div>
                                            <span class="fw-medium me-2">ID. Number :</span>
                                            <span class="text-muted"><?= h($user->identitypiecenumber) ?></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item pt-2 border-0">
                                        <div>
                                            <span class="fw-medium me-2">Education Level :</span>
                                            <span class="text-muted"><?= h($user->education_level) ?></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item pt-2 border-0">
                                        <div>
                                            <span class="fw-medium me-2">Education Option :</span>
                                            <span class="text-muted"><?= h($user->education_option) ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card custom-card overflow-hidden border">
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-style-6 mb-3 p-0" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link w-100 text-start active" id="profile-about-tab" data-bs-toggle="tab" data-bs-target="#profile-about-tab-pane" type="button" role="tab" aria-controls="profile-about-tab-pane" aria-selected="true">About</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link w-100 text-start" id="attendances-tab" data-bs-toggle="tab" data-bs-target="#attendances-tab-pane" type="button" role="tab" aria-controls="edit-profile-tab-pane" aria-selected="false" tabindex="-1">Attendances</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link w-100 text-start" id="dependents-tab" data-bs-toggle="tab" data-bs-target="#dependents-tab-pane" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="false" tabindex="-1">Dependents</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link w-100 text-start" id="leave-tab" data-bs-toggle="tab" data-bs-target="#leave-tab-pane" type="button" role="tab" aria-controls="gallery-tab-pane" aria-selected="false" tabindex="-1">Leaves</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="profile-tabs">
                                    <div class="tab-pane show active p-0 border-0" id="profile-about-tab-pane" role="tabpanel" aria-labelledby="profile-about-tab" tabindex="0">
                                        <ul class="list-group list-group-flush border rounded-3">
                                            <li class="list-group-item p-3">
                                                <span class="fw-medium fs-15 d-block mb-3">
                                                  <span class="me-1">✨</span>About Info :
                                                </span>
                                                <p class="text-muted mb-2" style="text-align: justify">
                                                    <?= h($user->bio) ?>
                                                </p>
                                            </li>
                                            <li class="list-group-item p-3">
                                                <span class="fw-medium fs-15 d-block mb-3">Contact Info :</span>
                                                <div class="text-muted">
                                                    <p class="mb-3">
                                                        <span class="avatar avatar-sm avatar-rounded text-primary p-1 bg-primary-transparent me-2">
                                                          <i class="fa-thin fa-envelope-open-text"></i>
                                                        </span>
                                                        <span class="fw-medium text-default">Email : </span> <?= h($user->email) ?>
                                                    </p>
                                                    <p class="mb-3">
                                                        <span class="avatar avatar-sm avatar-rounded text-primary p-1 bg-primary-transparent me-2">
                                                          <i class="fa-thin fa-phone"></i>
                                                        </span>
                                                        <span class="fw-medium text-default">Phone 1 : </span> <?= h($user->phone1) ?>
                                                    </p>
                                                    <p class="mb-3">
                                                        <span class="avatar avatar-sm avatar-rounded text-primary p-1 bg-primary-transparent me-2">
                                                          <i class="fa-thin fa-phone"></i>
                                                        </span>
                                                        <span class="fw-medium text-default">Phone 2 : </span> <?= h($user->phone2) ?>
                                                    </p>
                                                    <p class="mb-3">
                                                        <span class="avatar avatar-sm avatar-rounded text-primary1 p-1 bg-primary1-transparent me-2">
                                                          <i class="fa-thin fa-person-sign"></i>
                                                        </span>
                                                        <span class="fw-medium text-default">Marital Status : </span> <?= h($user->maritalstatus) ?>
                                                    </p>
                                                    <p class="mb-3">
                                                        <span class="avatar avatar-sm avatar-rounded text-primary2 p-1 bg-primary2-transparent me-2">
                                                          <i class="fa-thin fa-address-card"></i>
                                                        </span>
                                                        <span class="fw-medium text-default">Nationality : </span> <?= h($user->nationality) ?>
                                                    </p>
                                                    <p class="mb-0">
                                                        <span class="avatar avatar-sm avatar-rounded text-primary3 p-1 bg-primary3-transparent me-2">
                                                          <i class="fa-thin fa-map-location-dot"></i>
                                                        </span>
                                                        <span class="fw-medium text-default">Address : </span> <?= h($user->address_number) ?>, <?= h($user->address_avenue) ?> - <?= h($user->address_district) ?>, <?= h($user->address_municipality) ?>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list-group-item p-3">
                                                <span class="fw-medium fs-15 d-block mb-3">
                                                    Professional Experiences :
                                                    <button class="btn btn-sm btn-primary-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasProExp" aria-controls="offcanvasProExp"><i class="fa-thin fa-plus"></i> ADD</button>
                                                </span>
                                                <div class="row">
                                                    <div class="related">
                                                        <?php if (!empty($user->proexperiences)) : ?>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th><?= __('Period') ?></th>
                                                                        <th><?= __('Institution') ?></th>
                                                                        <th><?= __('Occupation') ?></th>
                                                                        <th class="actions"><?= __('Actions') ?></th>
                                                                    </tr>
                                                                    <?php foreach ($user->proexperiences as $proexperience) : ?>
                                                                        <tr>
                                                                            <td><?= date('Y-m-d', strtotime($proexperience->startdate)) ?> to <?= date('Y-m-d', strtotime($proexperience->endate)) ?></td>
                                                                            <td><?= h($proexperience->institution) ?></td>
                                                                            <td><?= h($proexperience->occupation) ?></td>
                                                                            <td class="actions">
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
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="attendances-tab-pane" role="tabpanel" aria-labelledby="edit-profile-tab" tabindex="0">
                                        <div class="row">
                                            <div class="related">
                                                <h4><?= __('Related Attendances') ?></h4>
                                                <?php if (!empty($user->attendances)) : ?>
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
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="dependents-tab-pane" role="tabpanel" aria-labelledby="timeline-tab" tabindex="0">
                                        <div class="row">
                                            <div class="related">
                                                <h4><?= __('Related Dependents') ?></h4>
                                                <?php if (!empty($user->dependents)) : ?>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
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
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="leave-tab-pane" role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
                                        <div class="row">
                                            <div class="related">
                                                <h4><?= __('Leaves balances') ?></h4>
                                                <?php if (!empty($user->leavesbalances)) : ?>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th><?= __('Leaves type') ?></th>
                                                                <th><?= __('Available balance') ?></th>
                                                                <th><?= __('Balance year') ?></th>
                                                            </tr>
                                                            <?php foreach ($user->leavesbalances as $leavesbalance) : ?>
                                                                <tr>
                                                                    <td><?= GeneralController::getNameOf($leavesbalance->leavestype_id, 'leavestypes') ?></td>
                                                                    <td><?= h($leavesbalance->availablebalance) ?></td>
                                                                    <td><?= h($leavesbalance->balanceyear) ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </table>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="related">
                                                <h4><?= __('Leaves') ?></h4>
                                                <?php if (!empty($user->leaves)) : ?>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th><?= __('Leaves type') ?></th>
                                                                <th><?= __('Status') ?></th>
                                                                <th><?= __('Period') ?></th>
                                                                <th><?= __('Approved by') ?></th>
                                                                <th><?= __('Approved date') ?></th>
                                                                <th class="actions"><?= __('Actions') ?></th>
                                                            </tr>
                                                            <?php foreach ($user->leaves as $leave) : ?>
                                                                <tr>
                                                                    <td><?= GeneralController::getNameOf($leave->leavestype_id, 'leavestypes') ?></td>
                                                                    <td><?= GeneralController::getNameOf($leave->status_id, 'statuses') ?></td>
                                                                    <td><?= date('Y-m-d', strtotime($leave->startdate)) ?> To <?= date('Y-m-d', strtotime($leave->enddate)) ?></td>
                                                                    <td><?= h($leave->approvedby) ?></td>
                                                                    <td><?= h($leave->approveddate) ?></td>
                                                                    <td class="actions">
                                                                        <?= $this->Html->link(__('View'), ['controller' => 'Leaves', 'action' => 'view', $leave->id], ['class' => 'btn btn-success btn-sm']) ?>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasProExp"
     aria-labelledby="offcanvasRightLabel1">
    <div class="offcanvas-header border-bottom border-block-end-dashed">
        <h5 class="offcanvas-title" id="offcanvasRightLabel1">Professional Experiences
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-3">
        <div class="row">
            <?= $this->Form->create(null, [
                'url' => ['controller' => 'proexperiences', 'action' => 'add', $user->id],
                'type'=>'post'
            ]);?>
            <div class="row gy-2">
                <div class="col-xl-12">
                    <?= $this->Form->control('startdate', ['type' => 'date', 'class' => 'form-control', 'label' => 'Start Date']); ?>
                </div>
                <div class="col-xl-12">
                    <?= $this->Form->control('endate', ['type' => 'date', 'class' => 'form-control', 'label' => 'End Date']); ?>
                </div>
                <div class="col-xl-12">
                    <?= $this->Form->control('institution', ['class' => 'form-control', 'label' => 'Institution']); ?>
                </div>
                <div class="col-xl-12">
                    <?= $this->Form->control('occupation', ['class' => 'form-control', 'label' => 'Occupation']); ?>
                </div>
                <div class="col-xl-12">
                    <?= $this->Form->control('comments', ['type' => 'textarea', 'class' => 'form-control', 'label' => 'Comments']); ?>
                </div>
            </div>
            <div class="mt-3 mb-3">
                <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
