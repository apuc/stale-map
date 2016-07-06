<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        /*'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],*/
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request'      => [
            'baseUrl' => '',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                '/' => 'mainpage/default',
                'blog/<slug>' => 'blog/default/view',
                'gallery' => 'gallery/default',
                'gallery/<slug>' => 'gallery/default/view',
                'services' => 'services/default',
                'services/<slug>' => 'services/default/view',
                'blog' => 'blog/default',
                'cooperation' => 'cooperation/default',
                'about' => 'site/about',
                'contact' => 'site/contact',
                'price' => 'site/price',
                'franchise' => 'site/franchise',
                'specials' => 'specials/default',
                'search' => 'search/default',
            ]
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
    ],
    'modules' => [
        'mainpage' => [
            'class' => 'frontend\modules\mainpage\Mainpage',
        ],
        'blog' => [
            'class' => 'frontend\modules\blog\Blog',
        ],
        'gallery' => [
            'class' => 'frontend\modules\gallery\Gallery',
        ],
        'cooperation' => [
            'class' => 'frontend\modules\cooperation\Cooperation',
        ],
        'specials' => [
            'class' => 'frontend\modules\specials\Specials',
        ],
        'services' => [
            'class' => 'frontend\modules\services\Services',
        ],
        'search' => [
            'class' => 'frontend\modules\search\Search',
        ],
    ],
    'params' => $params,
];
