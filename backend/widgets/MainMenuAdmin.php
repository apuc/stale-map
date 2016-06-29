<?php
namespace backend\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class MainMenuAdmin extends Widget
{
    public function run(){
        echo \yii\widgets\Menu::widget(
            [
                'items' => [
                    [
                        'label' => 'Настройки',
                        'url' => Url::to(['/settings']),
                    ],
                    [
                        'label' => 'Логотип',
                        'url' => Url::to(['/settings/settings/logo'])
                    ],
                    [
                        'label' => 'Шаблоны',
                        'url' => Url::to(['/template'])
                    ],
                    /*[
                        'label' => 'Блог',
                        'url' => Url::to(['/blog']),
                        'active' => Yii::$app->controller->module->id == 'blog'
                    ],*/

                    [
                        'label' => 'Блог',
                        'items' => [
                            [
                                'label' => 'Блог',
                                'url' => Url::to(['/blog']),
                                'active' => Yii::$app->controller->module->id == 'blog'
                            ],
                            [
                                'label' => 'Настройки',
                                'url' => Url::to(['/blog/options/edit_options']),
                                'active' => Yii::$app->controller->module->id == 'blog' ,
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-leanpub"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],

                    [
                        'label' => 'Галерея',
                        'items' => [
                            [
                                'label' => 'Категории',
                                'url' => Url::to(['/category']),
                                'active' => Yii::$app->controller->module->id == 'gallery_category'
                            ],
                            [
                                'label' => 'Работы',
                                'url' => Url::to(['/work']),
                                'active' => Yii::$app->controller->module->id == 'gallery_work' ,
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-leanpub"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],
                    [
                        'label' => 'Сотрудничество',
                        'url' => Url::to(['/cooperation']),
                        'active' => Yii::$app->controller->module->id == 'cooperation' ,
                    ],
                    [
                        'label' => 'Отзывы',
                        'url' => Url::to(['/reviews']),
                        'active' => Yii::$app->controller->module->id == 'reviews' ,
                    ],

                    [
                        'label' => 'Страницы',
                        'items' => [
                            [
                                'label' => 'О нас',
                                'url' => Url::to(['/about']),
                                'active' => Yii::$app->controller->module->id == 'about'
                            ],
                            /*[
                                'label' => 'Работы',
                                'url' => Url::to(['/work']),
                                'active' => Yii::$app->controller->module->id == 'gallery_work' ,
                            ],*/
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-leanpub"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],

                ],
                'activateItems' => true,
                'activateParents' => true,
                'activeCssClass'=>'active',
                'encodeLabels' => false,
                /*'dropDownCaret' => false,*/
                'submenuTemplate' => "\n<ul class='treeview-menu' role='menu'>\n{items}\n</ul>\n",
                'options' => [
                    'class' => 'sidebar-menu',
                ]
            ]
        );
    }
}