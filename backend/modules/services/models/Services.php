<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 05.07.2016
 * Time: 9:21
 */

namespace backend\modules\services\models;


use yii\db\ActiveRecord;

class Services extends \common\models\db\Services
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