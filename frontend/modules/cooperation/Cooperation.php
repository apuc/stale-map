<?php

namespace frontend\modules\cooperation;
use yii\helpers\Url;

/**
 * cooperation module definition class
 */
class Cooperation extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\modules\cooperation\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->layoutPath = Url::to('@frontend/views/layouts');
        // custom initialization code goes here
    }
}
