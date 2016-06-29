<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 28.06.2016
 * Time: 10:55
 */

namespace frontend\widgets;


use yii\base\Widget;

class RequestStyling extends Widget
{

    public function run(){
        return $this->render('request-styling');
    }
}