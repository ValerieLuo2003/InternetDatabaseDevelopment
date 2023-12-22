<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/statics'; 
    public $css = [
        //'css/site.css',
        'css/bootstrap.css',
        'css/style.css',
        'newscss/style.css',
        'newscss/font-awesome.min.css',
        'newscss/bootstrap.min.css',
        'css/prettyPhoto.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/fontawesome-all.css'
    ];
    public $js = [
        'js/jquery-2.2.3.min.js',
        'js/bootstrap.js',
        'js/owl.carousel.js',
        'js/move-top.js',
        'js/easing.js',
        'js/jquery-1.7.2.js',
        'js/jquery.quicksand.js',
        'js/script.js',
        'js/jquery.prettyPhoto.js',
        'js/newsjs/bootstrap.min.js',
        'js/newsjs/jquery.min.js',
        'js/newsjs/main.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
