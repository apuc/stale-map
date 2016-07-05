<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 04.07.2016
 * Time: 9:30
 */

namespace backend\modules\specials\models;


use yii\db\ActiveRecord;

class Specials extends \common\models\db\Specials
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['dt_add', 'dt_update'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['dt_update'],
                ],
            ],

            'slug' => [
                'class' => 'common\behaviors\Slug',
                'in_attribute' => 'title',
                'out_attribute' => 'slug',
                'translit' => true
            ],
        ];
    }
}