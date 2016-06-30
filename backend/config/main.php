<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'settings' => [
            'class' => 'backend\modules\settings\Settings',
        ],
        'template' => [
            'class' => 'backend\modules\template\Template',
        ],
        'blog' => [
            'class' => 'backend\modules\blog\Blog',
        ],
        'gallery_category' => [
            'class' => 'backend\modules\gallery_category\Gallery_category',
        ],
        'gallery_work' => [
            'class' => 'backend\modules\gallery_work\Gallery_work',
        ],
        'cooperation' => [
            'class' => 'backend\modules\cooperation\Cooperation',
        ],
        'reviews' => [
            'class' => 'backend\modules\reviews\Reviews',
        ],
        'about' => [
            'class' => 'backend\modules\about\About',
        ],
        'diplom' => [
            'class' => 'backend\modules\diplom\Diplom',
        ],
        'contact' => [
            'class' => 'backend\modules\contact\Contact',
        ],
        'price' => [
            'class' => 'backend\modules\price\Price',
        ],
    ],
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
            'baseUrl' => '/secure',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'settings' => 'settings/settings',
                'template' => 'template/template',
                'blog' => 'blog/blog',
                'category' => 'gallery_category/gallery_category',
                'work' => 'gallery_work/gallery_work',
                'cooperation' => 'cooperation/cooperation',
                'reviews' => 'reviews/reviews',
                'about' => 'about/default',
                'diplom' => 'diplom/diplom',
                'contact' => 'contact/default',
                'price' => 'price/price',
            ]
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
    ],
    'params' => $params,
];
