<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/mdb.min.css',
        'css/toastify.css',
    ];
    public $js = [
        'js/mdb.min.js',
        'countdown/js/jQuery.countdownTimer.js',
        'js/toastify.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
