<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->title = "Obiddinov Xurrambek";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="title" content="Xurrambek Obiddinov">
    <meta name="description" content="Obiddinov Xurrambek, dasturchi. 18-yosh. Namangan viloyati, Yangiqo'rg'on tumani">
    <meta name="keywords" content="programmer,coder,designer,freelancer">
    <meta name="robots" content="index, nofollow">
    <meta name="author" content="Obiddinov Xurrambek">
    <meta property="og:title" content="Obiddinov Xurrambek ">
    <meta property="og:site_name" content="MyPage">
    <meta property="og:url" content="https://mypage.uz">
    <meta property="og:description" content="Obiddinov Xurrambek, dasturchi. 18-yosh. Namangan viloyati, Yangiqo'rg'on tumani">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://e-soft.uz/wp-content/uploads/2019/06/e-soft-web.jpg">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body id="page-top">
<?php $this->beginBody() ?>

<?= $content ?>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
