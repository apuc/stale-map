<?php

namespace frontend\modules\specials\controllers;

use common\models\db\Settings;

use common\models\db\Specials;
use yii\web\Controller;

/**
 * Default controller for the `specials` module
 */
class DefaultController extends Controller
{
    public $layout = 'page';

    public $limit = 1;

    public function beforeAction($action)
    {
        $this->limit = Settings::find()->where(['key' => 'limitSpesial'])->one()->value;
        return parent::beforeAction($action);
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $spNew = Specials::find()->where(['type' => 1]);
        $spNewCount = $spNew->count();
        $spNew = $spNew
            ->limit($this->limit)
            ->orderBy('dt_add')
            ->all();


        $spParent = Specials::find()->where(['type' => 2]);
        $spParentCount = $spParent->count();
        $spParent = $spParent
            ->limit($this->limit)
            ->orderBy('dt_add')
            ->all();

        $page = 1;


        $spNewsUsl = Specials::find()->where(['type' => 3]);
        $spNewsUslCount = $spNewsUsl->count();
        $spNewsUsl = $spNewsUsl
            ->limit($this->limit)
            ->orderBy('dt_add')
            ->all();
        return $this->render('index',
            [
                'spNew' => $spNew,
                'spParent' => $spParent,
                'spNewsUsl' => $spNewsUsl,
                'spNewCount' => $spNewCount,
                'spParentCount' => $spParentCount,
                'spNewsUslCount' => $spNewsUslCount,
                'page' => $page,
                'limit' => $this->limit,
            ]);
    }


    public function actionAjax_get_specials(){
        $query = Specials::find()->where(['type' => $_POST['type']]);

        //$blogCount = $query->count();

        $sp = $query
            ->offset($_POST['page'] * $this->limit)
            ->limit($this->limit)
            ->orderBy('dt_add')
            ->all();

        return $this->renderPartial('ajaxSpecials',
            [
                'sp' => $sp,
            ]);
    }
}
