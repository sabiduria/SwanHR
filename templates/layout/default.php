<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$AppDescription = 'Swan HR';
$company = 'Sabiantart Corporate';
$session = $this->request->getSession();
$username = $session->read('Auth.Username');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $AppDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- App css -->
    <?= $this->Html->css(['bootstrap.min', 'icons.min', 'metisMenu.min', 'app.min',
        'datatables/dataTables.bootstrap5.min', 'datatables/buttons.bootstrap5.min', 'datatables/responsive.bootstrap4.min',
        'daterangepicker/daterangepicker', 'select2/select2.min', 'dropify/dropify.min.css']) ?>


    <?php
    if ($this->request->getParam('controller') === 'Users' && $this->request->getParam('action') === 'view') {
        echo $this->Html->css(['styles']);
    }
    ?>

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css" >
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">

    <style>
        .select2-container .select2-selection--single{
            height: 33.1px !important;
            border: 1px solid #e3ebf6;
        }
    </style>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand mt-3">
        <?=
        $this->Html->link('<span>'.$this->Html->image('logo.png', ['class'=>'logo-sm', 'style'=>'height:50px']).'</span>', ['controller'=>'/'], ['class'=>'logo', 'escape'=>false])
        ?>

    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <?php include ('menu.ctp') ?>
    </div>
</div>
<!-- end left-sidenav-->


<div class="page-wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-end mb-0">
                <li class="dropdown hide-phone">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i data-feather="search" class="topbar-icon"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                        <!-- Top Search Bar -->
                        <div class="app-search-topbar">
                            <form action="#" method="get">
                                <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <span class="ms-1 nav-user-name hidden-sm">
                            Hello <?= ucfirst($username) ?>
                        </span>
                        <?= $this->Html->image('avatar.png', ['class'=>'rounded-circle thumb-xs', 'alt'=>'profile-user']) ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual me-1"></i> Settings</a>
                        <div class="dropdown-divider mb-0"></div>
                        <?=
                        $this->Html->link('<i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout', ['controller'=>'Users', 'action'=>'logout'], ['class'=>'dropdown-item', 'escape'=>false])
                        ?>
                    </div>
                </li>
            </ul><!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile">
                        <i data-feather="menu" class="align-self-center topbar-icon"></i>
                    </button>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->

    <!-- Page Content-->
    <div class="page-content">

        <div class="container-fluid">

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>

        </div><!-- container -->

        <footer class="footer text-center text-sm-start">
            &copy; <script> document.write(new Date().getFullYear()) </script>
            <?= $AppDescription ?> <span class="text-muted d-none d-sm-inline-block float-end">Crafted with
                <i class="mdi mdi-heart text-danger"></i> by <?= $company ?></span>
        </footer><!--end footer-->
        </div>
        <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


    <?= $this->Html->script(['jquery.min', 'bootstrap.bundle.min', 'metismenu.min', 'waves', 'feather.min', 'simplebar.min', 'moment',
        'daterangepicker/daterangepicker',
        'datatables/jquery.dataTables.min', 'datatables/dataTables.bootstrap5.min', 'datatables/dataTables.buttons.min',
        'datatables/buttons.bootstrap5.min', 'datatables/jszip.min', 'datatables/pdfmake.min', 'datatables/vfs_fonts',
        'datatables/buttons.html5.min', 'datatables/buttons.print.min', 'datatables/buttons.colVis.min',
        'datatables/dataTables.responsive.min', 'datatables/responsive.bootstrap4.min', 'jquery.datatable.init',
        'app', 'select2/select2.min', 'jquery.forms-advanced', 'dropify/dropify.min', 'jquery.form-upload.init','apex-charts/apexcharts.min','jvectormap/jquery-jvectormap-2.0.2.min','jvectormap/jquery-jvectormap-us-aea-en']) ?>

<script>
    $('#myTable').DataTable();
</script>
</body>
</html>
