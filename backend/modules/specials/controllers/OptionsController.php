<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 30.05.2016
 * Time: 12:25
 */

namespace backend\modules\specials\controllers;


use common\classes\Debug;
use common\models\db\Settings;
use Yii;
use yii\base\Controller;

class OptionsController extends Controller
{

    public function actionEdit_options(){

        $title = Settings::find()->where(['key' => 'title_specials'])->one();
        $limit = Settings::find()->where(['key' => 'limitSpesial'])->one();
        $keywords = Settings::find()->where(['key' => 'key_specials'])->one();
        $description = Settings::find()->where(['key' => 'desc_specials'])->one();

        if(!empty($_POST)){

            $title->value = $_POST['title'];
            $title->save();

            $limit->value = $_POST['limit'];
            $limit->save();

            $keywords->value = $_POST['keywords'];
            $keywords->save();

            $description->value = $_POST['desc'];
            $description->save();



            Yii::$app->session->setFlash('success', 'Настройки успешно сохраненны');
            return $this->render('edit-options',
                [
                    'title' => $title,
                    'limit' => $limit,
                    'desc' => $description,
                    'keywords' => $keywords,
                ]);

        }
        else{
            return $this->render('edit-options',
                [
                    'title' => $title,
                    'limit' => $limit,
                    'desc' => $description,
                    'keywords' => $keywords,
                ]);
        }

    }
}