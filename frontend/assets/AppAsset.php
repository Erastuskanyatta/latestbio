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
        "/bio/csss/site.css",
        "/bio/csss/bootstrap.min.css",
        "/bio/csss/isotope.css",
        "/bio/csss/js/fancybox/jquery.fancybox.css",
        "/bio/csss/da-slider.css",
        "/bio/csss/styles.css",
        "/bio/csss/font-awesome.min.css"

    ];
    public $js = [
        '/bio/jss/bootstrap.min.js',
        '/bio/jss/custom.js',
        '/bio/jss/fancybox/jquery.fancybox.css',
        '/bio/jss/fancybox/jquery.fancybox.pack.js',
        '/bio/jss/jquery.cslider.js',
        '/bio/jss/jquery.diagram.js',
        '/bio/jss/jquery.isotop.min.js',
        '/bio/jss/jquery.nav.js',
        '/bio/jss/jquery-1.8.2.min.js',
        '/bio/jss/modernizr-latest.js',
        '/bio/jss/owl-carousel/owl.carousel.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        
    ];
}
