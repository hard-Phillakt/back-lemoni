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
class CakeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/custom.css',
        'https://fonts.googleapis.com/css?family=Lora|Open+Sans&display=swap',
    ];
    public $js = [
        'js/cart.js',
        'https://use.fontawesome.com/releases/v5.0.6/js/all.js'
    ];
    public $depends = [
        'dvizh\cart\assets\WidgetAsset',
    ];
}
