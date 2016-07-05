<?php

namespace backend\modules\skills_command\controllers;

use yii\web\Controller;

/**
 * Default controller for the `skills_command` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
