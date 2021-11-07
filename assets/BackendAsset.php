<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'layouts/backend/plugins/fontawesome-free/css/all.min.css',
        'layouts/backend/dist/css/adminlte.min.css',
    ];
    public $js = [
       'layouts/backend/plugins/jquery/jquery.min.js',
       'layouts/backend/plugins/bootstrap/js/bootstrap.bundle.min.js',
       'layouts/backend/dist/js/adminlte.min.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
