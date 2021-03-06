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
        'franchise' => [
            'class' => 'backend\modules\franchise\Franchise',
        ],
        'specials' => [
            'class' => 'backend\modules\specials\Specials',
        ],
        'services' => [
            'class' => 'backend\modules\services\Services',
        ],
        'skills_command' => [
            'class' => 'backend\modules\skills_command\Skills_command',
        ],
        'command' => [
            'class' => 'backend\modules\command\Command',
        ],
        'partners' => [
            'class' => 'backend\modules\partners\Partners',
        ],
        'studio' => [
            'class' => 'backend\modules\studio\Studio',
        ],
        'benefit' => [
            'class' => 'backend\modules\benefit\Benefit',
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
                'franchise' => 'franchise/default',
                'specials' => 'specials/specials',
                'services' => 'services/services',
                'skills' => 'skills_command/skills',
                'command' => 'command/command',
                'partners' => 'partners/partners',
                'studio' => 'studio/studio',
                'benefit' => 'benefit/benefit',
            ]
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
    ],
    'params' => $params,
];
