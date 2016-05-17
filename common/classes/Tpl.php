<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 16.05.2016
 * Time: 15:49
 */

namespace common\classes;


use common\models\db\Template;

class Tpl
{

    public static function get($name) {
        $tpl = Template::find()->where(['name' => $name])->one();

        return $tpl->tpl;
    }

}