<?php

namespace backend\modules\gallery_work\controllers;

use common\classes\Debug;
use common\models\db\GalleryCategory;
use common\models\db\GalleryWorkImg;
use common\models\db\WorkCategory;
use Yii;
use backend\modules\gallery_work\models\GalleryWork;
use backend\modules\gallery_work\models\GalleryWorkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Gallery_workController implements the CRUD actions for GalleryWork model.
 */
class Gallery_workController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all GalleryWork models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GalleryWorkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GalleryWork model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new GalleryWork model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GalleryWork();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           // Debug::prn($_POST['WorkCategory']['category_id']);
            GalleryWorkImg::updateAll(['work_id' => $model->id], ['work_id' => 99999]);

            foreach ($_POST['WorkCategory']['category_id'] as $item) {
                $catWork = new WorkCategory();
                $catWork->category_id = $item;
                $catWork->work_id = $model->id;
                $catWork->save();

            }
            return $this->redirect(['index']);
        } else {
            $category = GalleryCategory::find()->all();
            $catwork = new WorkCategory();
            return $this->render('create', [
                'model' => $model,
                'category' => $category,
                'catwork' => $catwork,
            ]);
        }
    }

    /**
     * Updates an existing GalleryWork model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            GalleryWorkImg::updateAll(['work_id' => $model->id], ['work_id' => 99999]);
            WorkCategory::deleteAll(['work_id' => $id]);
            foreach ($_POST['WorkCategory']['category_id'] as $item) {
                $catWork = new WorkCategory();
                $catWork->category_id = $item;
                $catWork->work_id = $model->id;
                $catWork->save();

            }
            return $this->redirect(['index']);
        } else {
            $category = GalleryCategory::find()->all();
            $catwork = new WorkCategory();
            $catworkSel = WorkCategory::find()->where(['work_id'=> $id])->all();
            $selcat = [];
            foreach ($catworkSel as $item) {
                $selcat[] = $item->category_id;
            }

            $img = GalleryWorkImg::find()->where(['work_id' => $id])->all();

            //Debug::prn($selcat);
            return $this->render('update', [
                'model' => $model,
                'category' => $category,
                'catwork' => $catwork,
                'selcat' => $selcat,
                'img' => $img,
            ]);
        }
    }

    /**
     * Deletes an existing GalleryWork model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GalleryWork model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return GalleryWork the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GalleryWork::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionUpload_file(){

        //Debug::prn($_SERVER);

        //$dir = Yii::$app->urlManagerFrontend->createAbsoluteUrl(['/frontend/web/media/workImg/']) . '/';
        $dir = $_SERVER['DOCUMENT_ROOT'] . '/frontend/web/media/workImg/';
        $dirDb = '/frontend/web/media/workImg/';
        $i = 0;

        if (!empty($_FILES['file']['name'][0])) {
            GalleryWorkImg::deleteAll(['work_id' => 99999]);
            foreach ($_FILES['file']['name'] as $file) {

                move_uploaded_file($_FILES['file']['tmp_name'][$i], $dir . $file);
                $img = new GalleryWorkImg();
                $img->work_id = 99999;
                $img->img = $dirDb . $file;

                $img->save();

                $i++;
            }
        }
        echo 1;
    }

    public function actionDelete_file(){
        GalleryWorkImg::deleteAll(['id' => $_GET['id']]);
        echo 1;
    }
}
