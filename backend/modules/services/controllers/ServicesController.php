<?php

namespace backend\modules\services\controllers;

use common\models\db\Benefit;
use common\models\db\BenefitServices;
use common\models\db\ServicesImg;
use Yii;
use backend\modules\services\models\Services;
use backend\modules\services\models\ServicesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ServicesController implements the CRUD actions for Services model.
 */
class ServicesController extends Controller
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
     * Lists all Services models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ServicesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Services model.
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
     * Creates a new Services model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Services();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            ServicesImg::updateAll(['services_id' => $model->id],  ['services_id' => 99999]);
            foreach ($_POST['benefit'] as $item) {
                $benefit = new BenefitServices();
                $benefit->benefit_id = $item;
                $benefit->servises_id = $model->id;
                $benefit->save();
            }
            return $this->redirect(['index']);
        } else {
            $benefitAll = Benefit::find()->all();
            return $this->render('create', [
                'model' => $model,
                'benefitAll' => $benefitAll,
            ]);
        }
    }

    /**
     * Updates an existing Services model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            BenefitServices::deleteAll(['servises_id' => $id]);
            ServicesImg::updateAll(['services_id' => $model->id],  ['services_id' => 99999]);
            foreach ($_POST['benefit'] as $item) {
                $benefit = new BenefitServices();
                $benefit->benefit_id = $item;
                $benefit->servises_id = $model->id;
                $benefit->save();
            }

            return $this->redirect(['index']);
        } else {
            $benefitAll = Benefit::find()->all();
            $benefitSel = BenefitServices::find()->where(['servises_id' => $id])->all();

            return $this->render('update', [
                'model' => $model,
                'benefitAll' => $benefitAll,
                'benefitSel' => $benefitSel,
                'img' => ServicesImg::find()->where(['services_id' => $id])->all(),
            ]);
        }
    }

    /**
     * Deletes an existing Services model.
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
     * Finds the Services model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Services the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Services::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function actionUpload_file(){

        //Debug::prn($_SERVER);

        //$dir = Yii::$app->urlManagerFrontend->createAbsoluteUrl(['/frontend/web/media/workImg/']) . '/';
        $dir = $_SERVER['DOCUMENT_ROOT'] . '/frontend/web/media/servicesImg/';
        $dirDb = '/frontend/web/media/servicesImg/';
        $i = 0;

        if (!empty($_FILES['file']['name'][0])) {
            //AboutPhoto::deleteAll(['work_id' => 99999]);
            foreach ($_FILES['file']['name'] as $file) {

                move_uploaded_file($_FILES['file']['tmp_name'][$i], $dir . $file);
                $img = new ServicesImg();
                $img->services_id = 99999;
                $img->img = $dirDb . $file;

                $img->save();

                $i++;
            }
        }
        echo 1;
    }

    public function actionDelete_file(){
        ServicesImg::deleteAll(['id' => $_GET['id']]);
        echo 1;
    }
}
