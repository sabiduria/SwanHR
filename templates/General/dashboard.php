<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Leave> $leaves
 */

use App\Controller\GeneralController;

?>
<!-- Start:: row-1 -->
<div class="row mt-3">
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card overflow-hidden">
            <div class="m-3 bg-light rounded-1 border">
                <div class="card-body pb-4 mb-2">
                    <div class="d-flex align-items-center w-100 justify-content-between gap-1">
                        <div>
                            <p class="mb-1 text-muted fw-medium">Total Members</p>
                            <h4 class="mb-0 fw-medium">12,116</h4>
                        </div>
                    </div>
                </div>
                <div id="employees"></div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card">
            <div class="m-3 bg-light rounded-1 border">
                <div class="card-body pb-4 mb-2">
                    <div class="d-flex align-items-center w-100 justify-content-between gap-1">
                        <div>
                            <p class="mb-1 text-muted fw-medium">Total Inscription Applied</p>
                            <h4 class="mb-0 fw-medium">15,784</h4>
                        </div>
                    </div>
                </div>
                <div id="job-applied"></div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card">
            <div class="m-3 bg-light rounded-1 border">
                <div class="card-body pb-4 mb-2">
                    <div class="d-flex align-items-center w-100 justify-content-between gap-1">
                        <div>
                            <p class="mb-1 text-muted fw-medium">Total Active Leaves</p>
                            <h4 class="mb-0 fw-medium">5</h4>
                        </div>
                    </div>
                </div>
                <div id="total-payouts"></div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card">
            <div class="m-3 bg-light rounded-1 border">
                <div class="card-body pb-4 mb-2">
                    <div class="d-flex align-items-center w-100 justify-content-between gap-1">
                        <div>
                            <p class="mb-1 text-muted fw-medium">Inscription Fees</p>
                            <h4 class="mb-0 fw-medium">$6.8k</h4>
                        </div>
                    </div>
                </div>
                <div id="gross-salary"></div>
            </div>
        </div>
    </div>
</div>
<!-- End:: row-1 -->

<!-- Start:: row-3 -->
<div class="row">
    <div class="col-xxl-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-header justify-content-between">
                <div class="card-title">Employee's Leave</div>
                <a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Employee</th>
                            <th scope="col">Type</th>
                            <th scope="col">Days</th>
                            <th scope="col">Status</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        <?php foreach ($leaves as $leave): ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm">
                                        <?= $this->Html->image('11') ?>
                                    </span>
                                    <div class="flex-1 ms-2">
                                        <p class="mb-0 fs-12 fw-medium"><?= GeneralController::getUserNameOf($leave->user_id) ?> </p>
                                        <a href="javascript:void(0);" class="fs-11 text-muted">Team Lead</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class=""><?= GeneralController::getNameOf($leave->leavestype_id, 'leavestypes') ?></span>
                            </td>
                            <td>
                                <span class=""><?= GeneralController::dateDiffInDays($leave->startdate, $leave->enddate) ?> Days</span>
                            </td>
                            <td>
                                <?php if ($leave->status_id == 2): ?>
                                    <span class="badge bg-success-transparent">Approved</span>
                                <?php elseif ($leave->status_id == 3) :?>
                                    <span class="badge bg-danger-transparent">Rejected</span>
                                <?php else: ?>
                                    <span class="badge bg-warning-transparent">Waiting</span>
                                <?php endif; ?>

                            </td>
                            <td>
                                <span class="fs-12"><?= $leave->startdate ?></span>
                            </td>
                            <td>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End:: row-3 -->
