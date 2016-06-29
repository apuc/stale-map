<?php

namespace backend\modules\about\controllers;

use common\classes\Debug;
use common\models\db\About;
use yii\web\Controller;

/**
 * Default controller for the `about` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {


        if(!empty($_POST)){
            $model = new About();
            foreach ($_POST['About'] as $key=>$value) {


                $model[$key] = $value;
            }

            About::updateAll($model,['id' => 0]);

            $model = About::find()->one();
            return $this->render('index',['model' => $model]);
        }
        else{
            $model = About::find()->one();
            return $this->render('index',['model' => $model]);
        }


    }
}
