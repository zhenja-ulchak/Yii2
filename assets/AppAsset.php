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
       ' css/styles-merged.css',
       ' css/style.min.css',
        'css/custom.css',
        //'css/style.css',
        'css/animate.css',
        'css/photoswipe.css',
        'css/bootstrap.min.css',
        'css/default-skin.css',
        'css/flexslider.css',
        'css/magnific-popup.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.min.css',
        'css/style.min.css',
        'css/icomoon.css',

    
    ];
    public $js = [
        'js/scripts.min.js',
        'js/main.min.js',
        'js/google-map.js',
        'js/custom.js',

        'js/main.js',
        'js/scripts.js',
        'js/scripts.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
