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
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/zerogrid.css',
	    'css/style.css',
        'web/font-awesome/css/font-awesome.min.css',
	    'css/menu.css',
    ];
    public $js = [
        'js/jquery1111.min.js',
	    'js/script.js',
    ];
    public $depends = [

    ];
}