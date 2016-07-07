<?php

namespace frontend\widgets;
use common\models\db\Partners;
use yii\base\Widget;

class ShowFooter extends Widget
{
    public function run()
    {
        $partners = Partners::find()->all();
        return $this->render('footer',['partners' => $partners]);
    }
}