<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 07.07.2016
 * Time: 10:56
 */

namespace backend\modules\studio\models;


class Studio extends \common\models\db\Studio
{
    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'common\behaviors\Slug',
                'in_attribute' => 'name',
                'out_attribute' => 'slug',
                'translit' => true
            ],
        ];
    }
}