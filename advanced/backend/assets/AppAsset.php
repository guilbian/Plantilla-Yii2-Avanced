<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    #public $basePath = '@webroot';
    #public $baseUrl = '@web';
    public $sourcePath = '@bower/Plantilla_Admin/';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        'css/AdminLTE.min.css',
        'blue.css',
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        'css/AdminLTE.min.css',
        'css/_all-skins.min.css',
        'css/site.css',
    ];
    public $js = [
                'js/jQuery-2.1.4.min.js',
                'js/bootstrap.min.js',
                'js/app.min.js',
                'js/icheck.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
