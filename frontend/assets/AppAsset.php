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
        'css/site.css',
        'theme/css/styles.css',
        'theme/css/olstyle.css',
    ];
    public $js = [
        'theme/js/lib/html5.js',
        'theme/js/jquery-1.10.1.min.js',
        'theme/js/lib/jquery.flexslider.js',
        'theme/js/lib/isotope.pkgd.min.js',
        'theme/js/lib/mousescroll.js',
        'theme/js/lib/placeholders.min.js',
        'theme/js/lib/jquery.mousewheel-3.0.6.pack.js',
        'theme/js/lib/jquery.fancybox.js',
        'theme/js/js.js',
        'theme/js/olscript.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDlM9JGhoTl4aeHmLdbFUw6jSUa__C7XJM&callback=initMap',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        /*'yii\bootstrap\BootstrapAsset',*/
    ];
}
