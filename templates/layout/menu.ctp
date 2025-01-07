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
</ul>
