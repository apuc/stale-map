<?php

namespace frontend\modules\cooperation\controllers;

use common\models\db\Cooperation;
use yii\web\Controller;

/**
 * Default controller for the `cooperation` module
 */
class DefaultController extends Controller
{

    public $layout = 'mainpage';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $cooperation = Cooperation::find()->all();
        return $this->render('index',['cooperation' => $cooperation]);
    }
}
