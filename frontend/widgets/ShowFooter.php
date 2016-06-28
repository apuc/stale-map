<?php

namespace frontend\widgets;
use yii\base\Widget;

class ShowFooter extends Widget
{
    public function run()
    {
        return $this->render('footer');
    }
}