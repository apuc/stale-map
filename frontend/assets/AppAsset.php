<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/libs.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/style.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery-1.10.1.min.js',
        'js/jquery-2.1.3.min.js',
        'js/lib/html5.js',

        'js/script.min.js',
        'js/owl.carousel.min.js',
        /*'js/owl.carousel.min.js',*/


        'js/lib/jquery.flexslider.js',
        'js/lib/isotope.pkgd.min.js',
        'js/lib/mousescroll.js',
        'js/lib/placeholders.min.js',
        'js/lib/jquery.mousewheel-3.0.6.pack.js',
        'js/lib/jquery.fancybox.js',
        'js/js.js',
        'js/olscript.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDlM9JGhoTl4aeHmLdbFUw6jSUa__C7XJM&callback=initMap',
        'js/myscript.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        /*'yii\bootstrap\BootstrapAsset',*/
    ];
}
