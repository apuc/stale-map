<?php

namespace backend\modules\contact\controllers;

use common\models\db\ContactPage;
use common\models\db\ContactPhone;
use yii\web\Controller;

/**
 * Default controller for the `contact` module
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
            $model = new ContactPage();
            foreach ($_POST['Contact'] as $key=>$value) {
                $model[$key] = $value;
            }
            ContactPage::updateAll($model,['id' => 0]);

            ContactPhone::deleteAll();
            foreach ($_POST['Phone'] as $item) {
                $phone = new ContactPhone();
                $phone->phone = $item;
                $phone->save();
            }

            $model = ContactPage::find()->one();
            $phone = ContactPhone::find()->all();
            return $this->render('index',
                [
                    'model' => $model,
                    'phone' => $phone,
                ]
            );
        }
        else{
            $model = ContactPage::find()->one();
            $phone = ContactPhone::find()->all();
            return $this->render('index',
                [
                    'model' => $model,
                    'phone' => $phone,
                ]);
        }
    }
}
