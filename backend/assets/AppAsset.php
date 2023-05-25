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
    // public $jsOptions = array(
    //     'position' => \yii\web\View::POS_HEAD
    // );
    public $css = [
        "vendor/fonts/boxicons.css",
        "vendor/css/core.css",
        "vendor/css/theme-default.css",
        "css/demo.css",
        "vendor/libs/perfect-scrollbar/perfect-scrollbar.css",
        "vendor/libs/apex-charts/apex-charts.css",
//        'css/select2.min.css'

    ];
    public $js = [
        "vendor/js/helpers.js",
        "js/config.js",
        "js/ui-popover.js",
        "vendor/libs/popper/popper.js",
        "vendor/js/bootstrap.js",
        "vendor/libs/perfect-scrollbar/perfect-scrollbar.js",
        "vendor/js/menu.js",
        "js/main.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
