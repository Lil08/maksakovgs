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
        'css/style.css',
        'css/animate.css',
        'css/bootstrap.css',
        'css/bootstrap-theme.css',
        'css/fixslider.css',
        'css/font-awesome.css',
        'css/magnific-popup.css',
        'css/overwrite.css',
        'css/responsive-slider.css',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/functions.js',
        'js/jquery.flexslider.min.js',
        'js/jquery.js',
        'js/jquery.magnific-popup.js',
        'js/npm.js',
        'js/responsive-slider.js',
        'js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
