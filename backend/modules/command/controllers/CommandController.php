<?php

namespace backend\modules\command\controllers;

use common\models\db\CommandSkills;
use common\models\db\SkillsCommand;
use Yii;
use backend\modules\command\models\Command;
use backend\modules\command\models\CommandSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CommandController implements the CRUD actions for Command model.
 */
class CommandController extends Controller
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
     * Lists all Command models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CommandSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Command model.
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
     * Creates a new Command model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Command();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            foreach ($_POST['skills'] as $item) {
                $skills = New CommandSkills();
                $skills->command_id = $model->id;
                $skills->skills_id = $item;
                $skills->save();
            }
            return $this->redirect(['index']);
        } else {

            $skills = SkillsCommand::find()->all();
            return $this->render('create', [
                'model' => $model,
                'skills' => $skills,
            ]);
        }
    }

    /**
     * Updates an existing Command model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            CommandSkills::deleteAll(['command_id' => $id]);
            foreach ($_POST['skills'] as $item) {
                $skills = New CommandSkills();
                $skills->command_id = $model->id;
                $skills->skills_id = $item;
                $skills->save();
            }
            return $this->redirect(['index']);
        } else {
            $skills = SkillsCommand::find()->all();
            $skillsSelect = CommandSkills::find()->where(['command_id' => $id])->all();
            return $this->render('update', [
                'model' => $model,
                'skills' => $skills,
                'skillsSelect' => $skillsSelect,
            ]);
        }
    }

    /**
     * Deletes an existing Command model.
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
     * Finds the Command model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Command the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Command::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
