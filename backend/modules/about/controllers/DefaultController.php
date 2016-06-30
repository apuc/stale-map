<?php

namespace backend\modules\about\controllers;

use common\classes\Debug;
use common\models\db\About;
use common\models\db\AboutPhoto;
use common\models\db\AboutWorkId;
use common\models\db\GalleryWork;
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
            AboutWorkId::deleteAll();
            foreach ($_POST['work'] as $item) {
                $workId = new AboutWorkId();
                $workId->work_id = $item;
                $workId->save();
            }

            $work = GalleryWork::find()->all();
            $selecWork = AboutWorkId::find()->all();
            $img = AboutPhoto::find()->all();
            $model = About::find()->one();
            return $this->render('index',
                [
                    'model' => $model,
                    'work' => $work,
                    'selectWork' => $selecWork,
                    'img' => $img,
                ]
            );
        }
        else{
            $model = About::find()->one();
            $work = GalleryWork::find()->all();
            $selecWork = AboutWorkId::find()->all();

            $img = AboutPhoto::find()->all();

            return $this->render('index',
                [
                    'model' => $model,
                    'work' => $work,
                    'selectWork' => $selecWork,
                    'img' => $img,
                ]);
        }


    }

    public function actionUpload_file(){

        //Debug::prn($_SERVER);

        //$dir = Yii::$app->urlManagerFrontend->createAbsoluteUrl(['/frontend/web/media/workImg/']) . '/';
        $dir = $_SERVER['DOCUMENT_ROOT'] . '/frontend/web/media/aboutImg/';
        $dirDb = '/frontend/web/media/aboutImg/';
        $i = 0;

        if (!empty($_FILES['file']['name'][0])) {
            //AboutPhoto::deleteAll(['work_id' => 99999]);
            foreach ($_FILES['file']['name'] as $file) {

                move_uploaded_file($_FILES['file']['tmp_name'][$i], $dir . $file);
                $img = new AboutPhoto();

                $img->img = $dirDb . $file;

                $img->save();

                $i++;
            }
        }
        echo 1;
    }

    public function actionDelete_file(){
        AboutPhoto::deleteAll(['id' => $_GET['id']]);
        echo 1;
    }
}
