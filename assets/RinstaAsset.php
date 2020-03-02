<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 02.03.2020
 * Time: 9:41
 */

namespace app\assets;

use yii\web\AssetBundle;

class RinstaAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'rinsta/static/css/main.921b8bec.chunk.css',
    ];

    public $js = [
        'rinsta/static/js/init.js',
        'rinsta/static/js/2.1899f6f3.chunk.js',
        'rinsta/static/js/main.8189f256.chunk.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}