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
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dist/css/skins/_all-skins.min.css',
        'dist/css/AdminLTE.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        'bootstrap/css/bootstrap.min.css',
    ];
    public $js = [
        'dist/js/demo.js',
        'dist/js/app.min.js',
        'plugins/fastclick/fastclick.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'bootstrap/js/bootstrap.min.js',
        'plugins/jQuery/jQuery-2.1.4.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
