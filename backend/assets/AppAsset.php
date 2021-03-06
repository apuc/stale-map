<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

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
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'css/plugins/iCheck/flat/blue.css',
        'css/plugins/morris/morris.css',
        'css/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'css/plugins/datepicker/datepicker3.css',
        'css/plugins/daterangepicker/daterangepicker-bs3.css',
        'css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'css/plugins/timepicker/bootstrap-timepicker.min.css',
       /* 'css/elfinder_min.css',
        'css/theme.css',*/
        'css/style.css',
    ];
    public $js = [
        /*'js/plugins/jQuery/jQuery-2.1.4.min.js',*/
        'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
        'js/bootstrap/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        /*'js/plugins/morris/morris.min.js',*/
        'js/plugins/sparkline/jquery.sparkline.min.js',
        'js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'js/plugins/knob/jquery.knob.js',
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
        'js/plugins/daterangepicker/daterangepicker.js',
        'js/plugins/datepicker/bootstrap-datepicker.js',
        'js/plugins/datepicker/locales/bootstrap-datepicker.ru.js',
        'js/plugins/timepicker/bootstrap-timepicker.min.js',
        'js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'js/plugins/slimScroll/jquery.slimscroll.min.js',
        'js/plugins/fastclick/fastclick.min.js',
        'js/dist/js/app.min.js',
        /*'js/dist/js/pages/dashboard.js',*/
        'js/dist/js/demo.js',
        /*'js/elfinder_min.js',*/
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
