<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace simpleprojects\sbadmin\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SbAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    
    public $js = [
        'metisMenu/dist/metisMenu.min.js',
        'raphael/raphael-min.js',
        'morrisjs/morris.min.js', 
        'startbootstrap-sb-admin-2/dist/js/sb-admin-2.js'

    ];

    public $css = [
        'metisMenu/dist/metisMenu.min.css',
        'morrisjs/morris.css ',
        'font-awesome/css/font-awesome.min.css',
        'startbootstrap-sb-admin-2/dist/css/sb-admin-2.css',
        'startbootstrap-sb-admin-2/dist/css/timeline.css',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
