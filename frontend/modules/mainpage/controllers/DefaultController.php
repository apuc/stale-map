<?php

namespace frontend\modules\mainpage\controllers;

use common\models\db\Diplom;
use common\models\db\Reviews;
use yii\web\Controller;

/**
 * Default controller for the `mainpage` module
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
        $reviews = Reviews::find()->all();
        $diploms = Diplom::find()->all();
        return $this->render('index',
            [
                'reviews' => $reviews,
                'diplom' => $diploms,
            ]);
    }
}
