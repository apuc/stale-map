<?php

namespace backend\modules\studio\controllers;

use common\classes\Debug;
use common\models\db\GeobaseCity;
use Yii;
use backend\modules\studio\models\Studio;
use backend\modules\studio\models\StudioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudioController implements the CRUD actions for Studio model.
 */
class StudioController extends Controller
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
     * Lists all Studio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Studio model.
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
     * Creates a new Studio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Studio();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {

            $city = GeobaseCity::find()
                ->select([
                    '`geobase_city`.`name` as value',
                    '`geobase_city`.`name` as  label',
                    '`geobase_city`.`id` as id',
                    '`geobase_region`.`name` as region_name',
                    '`geobase_region`.`id` as region_id'
                ])
                ->leftJoin('`geobase_region`', '`geobase_region`.`id` = `geobase_city`.`region_id`')
                ->asArray()
                ->all();


            $i = 0;

$data = [];

            //Debug::prn($city);
            foreach ($city as $item) {
                $data[$item['region_name']][$item['id']] = $item['value'];
            }

           // Debug::prn($data);

            foreach($city as $c){


                $r[$i]['id'] = $c['id'];
                $r[$i]['value'] = $c['value'];
                $r[$i]['label'] = $c['label']. " (" . $c['region_name'] . ")";
                $i++;
            }

            return $this->render('create', [
                'model' => $model,
                'regions'=>$data,
            ]);
        }
    }

    /**
     * Updates an existing Studio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Studio model.
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
     * Finds the Studio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Studio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Studio::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
