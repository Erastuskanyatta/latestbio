<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PortalAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/bio/font-awesome/css/font-awesome.css",
        "/bio/css/bootstrap.min.css" ,
        "/bio/css/plugins/toastr/toastr.min.css" ,
        "/bio/js/plugins/gritter/jquery.gritter.css" ,
        "/bio/css/animate.css",
        "/bio/css/style.css"

    ];
    public $js = [
        "/bio/js/jquery-2.1.1.js",
        "/bio/js/bootstrap.min.js",
        "/bio/js/Chart.js",
        "/bio/js/jquery-2.1.4.min.js",
        "/bio/js/script.js",
        "/bio/js/plugins/metisMenu/jquery.metisMenu.js",
        "/bio/js/plugins/slimscroll/jquery.slimscroll.min.js",
        "/bio/js/plugins/flot/jquery.flot.js",
        "/bio/js/plugins/flot/jquery.flot.tooltip.min.js",
        "/bio/js/plugins/flot/jquery.flot.spline.js",
        "/bio/js/plugins/flot/jquery.flot.resize.js",
        "/bio/js/plugins/flot/jquery.flot.pie.js",
        "/bio/js/plugins/peity/jquery.peity.min.js",
        "/bio/js/demo/peity-demo.js",
        "/bio/js/inspinia.js",
        '/bio/js/plugins/pace/pace.min.js',
        "/bio/js/plugins/jquery-ui/jquery-ui.min.js",
        "/bio/js/plugins/gritter/jquery.gritter.min.js",
        "/bio/js/plugins/sparkline/jquery.sparkline.min.js",
        "/bio/js/demo/sparkline-demo.js",
        "/bio/js/plugins/chartJs/Chart.min.js",
        "/bio/js/plugins/toastr/toastr.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
