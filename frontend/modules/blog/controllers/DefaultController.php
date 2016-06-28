<?php

namespace frontend\modules\blog\controllers;

use common\classes\Debug;
use common\models\db\Blog;
use common\models\db\Settings;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `blog` module
 */
class DefaultController extends Controller
{
    public $limit = 1;
    public $layout = 'mainpage';

    public function beforeAction($action)
    {
        $this->limit = Settings::find()->where(['key' => 'limitBlog'])->one()->value;
        return parent::beforeAction($action);
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $query = Blog::find();

        $blogCount = $query->count();

        $blog = $query
            ->limit($this->limit)
            ->orderBy('dt_add')
            ->all();

        $page = 1;



        return $this->render('index',
            [
                'blog' => $blog,
                'blogCount' => $blogCount,
                'page' => $page,
                'limit' => $this->limit,
            ]);

    }

    public function actionAjax_get_blog(){
        $query = Blog::find();

        $blogCount = $query->count();

        $blog = $query
            ->offset($_POST['page'] * $this->limit)
            ->limit($this->limit)
            ->orderBy('dt_add')
            ->all();


        return $this->renderPartial('ajaxBlog',
            [
                'blog' => $blog,
                'blogCount' => $blogCount,
                'page' => $_POST['page'] + 1,
                'limit' => $this->limit,
            ]);
    }

    public function actionView($slug)
    {
        return $this->render('view', [
            'model' => $this->findModelSlug($slug),
        ]);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $slug
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelSlug($slug)
    {
        if (($model = Blog::findOne(['slug' => $slug])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
