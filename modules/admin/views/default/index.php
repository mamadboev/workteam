<?php

use yii\helpers\Url;

$url = Yii::$app->homeUrl.'backend/';
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */


$this->title = 'Bosh sahifa';
?>

        <div class="mtbox">
          <div class="row">
            <div class="col-lg-6">
             <!-- small box -->
             <div class="small-box bg-info">
              <div class="inner">
                <h3><?= \app\models\Portfolio::find()->count()?></h3>

                <p><?= Yii::t('yii','Portfoliolar')?></p>
              </div>
              <div class="icon">
                <i class="fa fa-newspaper"></i>
              </div>
              <a href="<?= Url::to(['/admin/portfolio']) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>               
            </div>
            <div class="col-lg-6">
                <!-- small box -->
             <div class="small-box bg-success">
              <div class="inner">
                <h3><?= \app\models\User::find()->count()?></h3>

                <p><?= Yii::t('yii','Userlar')?></p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?= Url::to(['/admin/user']) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>  
            </div>
         </div>
        </div><!-- /row mt -->