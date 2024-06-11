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
        "css/bootstrap-reboot.min.css",
        "css/bootstrap-grid.min.css",
        "css/owl.carousel.min.css",
        "css/jquery.mCustomScrollbar.min.css",
        "css/nouislider.min.css",
        "css/ionicons.min.css",
        "css/plyr.css",
        "css/photoswipe.css",
        "css/default-skin.css",
        "css/main.css"
    ];
    public $js = [
        // "js/jquery-3.3.1.min.js",
        "js/bootstrap.bundle.min.js",
        "js/owl.carousel.min.js",
        "js/jquery.mousewheel.min.js",
        "js/jquery.mCustomScrollbar.min.js",
        "js/wNumb.js",
        "js/nouislider.min.js",
        "js/plyr.min.js",
        "js/jquery.morelines.min.js",
        "js/photoswipe.min.js",
        "js/photoswipe-ui-default.min.js",
        "js/main.js"
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
