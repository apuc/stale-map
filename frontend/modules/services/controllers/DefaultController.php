<?php

namespace frontend\modules\services\controllers;

use common\models\db\Services;
use yii\web\Controller;

/**
 * Default controller for the `services` module
 */
class DefaultController extends Controller
{
    public $layout = 'page';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {

        return $this->render('view',
            [
                'service' => Services::find()->where(['slug' => $_GET['slug']])->one(),
            ]
    );
    }
}
