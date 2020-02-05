<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'language' => 'ru-RU',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'layout' => 'base',
    'modules' => [
        'cart' => [
            'class' => 'dvizh\cart\Module',
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@'], //глобальный доступ к фаил менеджеру @ - для авторизорованных , ? - для гостей , чтоб открыть всем ['@', '?']
            'disabledCommands' => ['netmount'], //отключение ненужных команд https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#commands
            'roots' => [
                [
                    'baseUrl'=>'@web',
                    'basePath'=>'@webroot',
                    'path' => 'files/global',
                    'name' => 'global' 
                ]
            ]
        ]
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'dROtL969gIkihl3mUrmakK0iKS0QCw83',
            'baseUrl' => ''
        ],
        'assetManager' => [
//          зарезал scripts.js плагина корзины. переопредил на свой cart_custom_opt.js
            'assetMap' => [
                'scripts.js' => '/js/cart_custom_opt.js',
            ],
            'appendTimestamp' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
//            'errorAction' => 'site/error',
            'errorAction' => 'error/index',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => 'info@cafelemoni.ru',
                'password' => 'UY1wWxBw',
                'port' => '465', // Port 25 is a very common port too
                'encryption' => 'ssl', // It is often used, check your provider or mail server specs

//                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.timeweb.ru',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
//                'username' => 'info@cafelemoni.ru',
//                'password' => 'UY1wWxBw',
//                'port' => '465', // Port 25 is a very common port too
//                'encryption' => 'ssl', // It is often used, check your provider or mail server specs
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'index',
                'admin/' => 'master/login',
                'cake/' => 'cake-goods/index',
                'candy/' => 'candie-goods/index',
                'bouquet/' => 'candie-goods/index',
                'pickup/' => 'delivery/pickup',
                'search/' => 'search/index',
//                'shadlaw/' => 'cake-goods/shadlaw',
//                'classic/' => 'cake-goods/classic',
//                'cookie/' => 'candie-goods/cookie',
//                'dessert/' => 'candie-goods/dessert',
                'cake/<id:\d+>' => 'card/cake',
                'shadlaw/<id:\d+>' => 'card/shadlaw',
                'candy/<id:\d+>' => 'card/candie',
                'bouquet/<id:\d+>' => 'card/bouquet'
            ],
        ],
        'cart' => [
            'class' => 'dvizh\cart\Cart',
            'currency' => '', //Валюта
            'currencyPosition' => 'after', //after или before (позиция значка валюты относительно цены)
            'priceFormat' => [2,'.', ''], //Форма цены
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
