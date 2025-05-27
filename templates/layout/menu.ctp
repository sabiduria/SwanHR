<?php
    use App\Controller\AccessrightsController;
    $session = $this->request->getSession();
    $profile_id = $session->read('Auth.ProfileId');
    $profile = $session->read('Auth.ProfileName');
    $agency_name = $session->read('Auth.AgencyName');
?>

<p class="text-center mt-3">
    <span class="badge rounded-pill badge-outline-primary"><?= 'Profile :<i> '.$profile.'</i>' ?></span>
</p>
<ul class="metismenu left-sidenav-menu">
    <li class="menu-label mt-0">Menu Principal</li>
    <li>
        <?= $this->Html->link('<i data-feather="home" class="align-self-center menu-icon"></i>Tableau de Bord', ['controller'=>'/'], ['escape'=>false]) ?>
    </li>

    <li>
        <a href="javascript: void(0);"><i data-feather="users" class="align-self-center menu-icon"></i><span>Staff Members</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>New Staff Member', ['controller'=>'users', 'action'=>'add'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>List of Members', ['controller'=>'users', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
        </ul>
    </li>

    <li>
        <?= $this->Html->link('<i data-feather="calendar" class="align-self-center menu-icon"></i>Attendances', ['controller' => 'attendances', 'action' => 'index'], ['escape'=>false]) ?>
    </li>

    <li>
        <a href="javascript: void(0);"><i data-feather="dollar-sign" class="align-self-center menu-icon"></i><span>Payrolls</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>Payroll', ['controller'=>'payrolls', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>Payroll Infos', ['controller'=>'payrollinfos', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);"><i data-feather="sunrise" class="align-self-center menu-icon"></i><span>Leaves</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>New Leave', ['controller'=>'leaves', 'action'=>'add'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>List of Leaves', ['controller'=>'leaves', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);"><i data-feather="settings" class="align-self-center menu-icon"></i><span>Settings</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>Relationships', ['controller'=>'relationships', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>Occupations', ['controller'=>'occupations', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>Holidays', ['controller'=>'holidays', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>Attendance Types', ['controller'=>'attendancestypes', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>Leave Types', ['controller'=>'leavestypes', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="ti-control-record"></i>Leave Balance', ['controller'=>'leavesbalances', 'action'=>'index'], ['escape'=>false, 'class'=>'nav-link']) ?>
            </li>
        </ul>
    </li>
</ul>
