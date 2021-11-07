<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\BackendAsset;
use yii\helpers\Url;

BackendAsset::register($this);

$url = Yii::$app->homeUrl.'layouts/backend/';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= Url::to(['/admin'])?>" class="nav-link">Home</a>
      </li>      
    </ul>    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">    
      <li class="nav-item">
        <a data-method="POST" href="<?= Url::to(['/logout'])?>"><button class="btn btn-block btn-outline-danger">Chiqish</button></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Yii::$app->homeUrl?>" class="brand-link">
      <img src="<?= $url ?>dist/img/icon.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Khamdullaev.uz</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $url ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= Yii::$app->user->identity->full_name?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php $controller = Yii::$app->controller->id; ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= Url::to(['default/'])?>" class="nav-link <?= ($controller=='default')?'active':''?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Bosh sahifa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= Url::to(['portfolio/'])?>" class="nav-link <?= ($controller=='portfolio')?'active':''?>">
              <i class="nav-icon fa fa-newspaper"></i>
              <p>Portfoliolar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= Url::to(['user/'])?>" class="nav-link <?= ($controller=='user')?'active':''?>">
              <i class="nav-icon fa fa-users"></i>
              <p>Userlar</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $this->title ?></h1>
          </div><!-- /.col -->          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <?= $content ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      E-soft Inc.
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?= date('Y') ?></strong> Elbek Khamdullaev
  </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>