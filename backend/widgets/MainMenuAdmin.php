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