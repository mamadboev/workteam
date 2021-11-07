<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Portfolio */

$this->title = 'Portfolio yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Portfoliolar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
