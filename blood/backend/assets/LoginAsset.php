<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/font-awesome.css',
        'css/morris-0.4.3.min.css',
        'css/custom-styles.css',
        'http://fonts.googleapis.com/css?family=Open+Sans',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
       'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
        'css/cssCharts.css'
    ];
    public $js = [
      'js/jquery-1.10.2.js',
      'js/bootstrap.min.js',
      'js/jquery.metisMenu.js',
      'js/raphael-2.1.0.min.js',
      'js/morris.js',
      'js/easypiechart.js',
      'js/easypiechart-data.js',
      'js/jquery.chart.js',
      'js/custom-scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
