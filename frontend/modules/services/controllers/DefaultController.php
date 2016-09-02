<?php

namespace frontend\modules\services\controllers;

use common\models\db\BenefitServices;
use common\models\db\Services;
use common\models\db\ServicesImg;
use yii\web\Controller;

/**
 * Default controller for the `services` module
 */
class DefaultController extends Controller
{
    public $layout = 'page';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {

        return $this->render('view',
            [
                'service' => $sevices = Services::find()->where(['slug' => $_GET['slug']])->one(),
                'servicesAll' => Services::find()->all(),
                'benefit' => BenefitServices::find()
                    ->leftJoin('benefit', '`benefit`.`id` = `benefit_services`.`benefit_id`')
                    ->where(['servises_id' => $sevices->id])
                    ->with('benefit')
                    ->all(),
                'img' => ServicesImg::find()->where(['services_id' => $sevices->id])->all(),
            ]
    );
    }
}
