<?php

namespace frontend\modules\search\controllers;

use common\classes\Debug;
use common\models\db\Blog;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Default controller for the `search` module
 */
class DefaultController extends Controller
{

    public $layout = 'page';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $search = Blog::find()
            ->where(['LIKE', 'description', $_POST['searchSite']])
            ->orWhere(['LIKE', 'title', $_POST['searchSite']])
            ->all();
        return $this->render('index',['search' => $search]);
    }
}
