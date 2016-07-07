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
                        'label' => 'Дипломы',
                        'url' => Url::to(['/diplom']),
                        'active' => Yii::$app->controller->module->id == 'diplom' ,
                    ],
                    [
                        'label' => 'Прайс',
                        'url' => Url::to(['/price']),
                        'active' => Yii::$app->controller->module->id == 'price' ,
                    ],

                    [
                        'label' => 'Спецпредложения',
                        'items' => [
                            [
                                'label' => 'Спецпредложения',
                                'url' => Url::to(['/specials']),
                                'active' => Yii::$app->controller->module->id == 'specials',
                            ],
                            [
                                'label' => 'Настройки',
                                'url' => Url::to(['/specials/options/edit_options']),
                                'active' => Yii::$app->controller->module->id == 'specials' ,
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-leanpub"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],
                    [
                        'label' => 'Услуги',
                        'url' => Url::to(['/services']),
                        'active' => Yii::$app->controller->module->id == 'services' ,
                    ],

                    [
                        'label' => 'Партнеры',
                        'url' => Url::to(['/partners']),
                        'active' => Yii::$app->controller->module->id == 'partners' ,
                    ],
                    [
                        'label' => 'Студии',
                        'url' => Url::to(['/studio']),
                        'active' => Yii::$app->controller->module->id == 'studio' ,
                    ],
                    [
                        'label' => 'Страницы',
                        'items' => [
                            [
                                'label' => 'О нас',
                                'url' => Url::to(['/about']),
                                'active' => Yii::$app->controller->module->id == 'about'
                            ],
                            [
                                'label' => 'Контакты',
                                'url' => Url::to(['/contact']),
                                'active' => Yii::$app->controller->module->id == 'contact' ,
                            ],
                            [
                                'label' => 'Франшиза',
                                'url' => Url::to(['/franchise']),
                                'active' => Yii::$app->controller->module->id == 'franchise' ,
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-leanpub"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],

                    [
                        'label' => 'Команда',
                        'items' => [
                            [
                                'label' => 'Навыки',
                                'url' => Url::to(['/skills']),
                                'active' => Yii::$app->controller->module->id == 'skills_command'
                            ],
                            [
                                'label' => 'Команда',
                                'url' => Url::to(['/command']),
                                'active' => Yii::$app->controller->module->id == 'command' ,
                            ],
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