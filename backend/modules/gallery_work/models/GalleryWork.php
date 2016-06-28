<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 07.06.2016
 * Time: 10:15
 */

namespace backend\modules\gallery_work\models;


use yii\db\ActiveRecord;

class GalleryWork extends \common\models\db\GalleryWork
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
                'in_attribute' => 'name',
                'out_attribute' => 'slug',
                'translit' => true
            ],
        ];
    }

}