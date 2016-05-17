<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 16.05.2016
 * Time: 12:59
 */

namespace common\classes;


use common\models\db\Settings;

class S
{

    public static function get($key) {
        $s = Settings::find()->where(['key' => $key])->one();
        return $s->value;
    }

}