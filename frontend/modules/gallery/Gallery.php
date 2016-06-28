<?php

namespace frontend\modules\gallery;
use yii\helpers\Url;

/**
 * gallery module definition class
 */
class Gallery extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\modules\gallery\controllers';

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
