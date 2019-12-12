<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 12.12.2019
 * Time: 12:03
 */

namespace app\assets;

use yii\web\AssetBundle;

class OwlAsset extends AssetBundle {

    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'css/owl/owl.carousel.min.css',
        'css/owl/owl.theme.default.min.css',
    ];

    public $js = [
        'js/owl/owl.carousel.min.js',
        'js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}