
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Swan HR - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="HR Admin Software Developed by SabiantArt Corporate" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <?= $this->Html->css(['bootstrap.min', 'icons.min', 'metisMenu.min', 'app.min']) ?>
        <style>
            .account-body .auth-header-box{
                background-color : #fff !important;
            }
        </style>
    </head>

    <body class="account-body accountbg">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        <?= $this->Html->script(['jquery.min', 'bootstrap.bundle.min', 'metismenu.min', 'waves', 'feather.min', 'simplebar.min']) ?>
    </body>
</html>
