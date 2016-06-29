<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 28.06.2016
 * Time: 11:38
 */

namespace frontend\widgets;


use common\models\db\Reviews;
use yii\base\Widget;

class ShowReviews extends Widget
{
    public function run(){
        $reviews = Reviews::find()->all();
        return $this->render('reviews', ['reviews' => $reviews]);
    }
}