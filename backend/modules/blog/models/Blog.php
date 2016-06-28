<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 30.05.2016
 * Time: 9:16
 */

namespace backend\modules\blog\models;
use yii\db\ActiveRecord;


class Blog extends \common\models\db\Blog
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