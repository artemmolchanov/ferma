<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/dialog.css',
        'css/fonts.css',
        'css/jquery.bxslider.css',
        'css/jquery.mCustomScrollbar.min.css',
        'css/reset.css',
    ];
    public $js = [
        'js/classie.js',
        'js/dialogFx.js',
        'js/jquery.bxslider.js',
        'js/jquery.maskedinput.min.js',
        'js/jquery.mCustomScrollbar.concat.min.js',
        'js/jquery.mCustomScrollbar.min.js',
        'js/jquery-1.11.0.min.js',
        'js/main.js',
        'js/map.js',
        'js/modernizr.custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',

    ];
}
