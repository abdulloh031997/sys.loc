<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/vendors/mdi/css/materialdesignicons.min.css",
        "/vendors/css/vendor.bundle.base.css",
        "/css/style.css",
        '/css/site.css',
    ];
    public $js = [
        "/vendors/js/vendor.bundle.base.js",
//        "/js/off-canvas.js",
//        "/js/hoverable-collapse.js",
//        "/js/misc.js",
//        "/js/dashboard.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
