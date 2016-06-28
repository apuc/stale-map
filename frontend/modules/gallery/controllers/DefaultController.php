<?php

namespace frontend\modules\gallery\controllers;

use common\models\db\GalleryCategory;
use common\models\db\GalleryWork;
use yii\web\Controller;

/**
 * Default controller for the `gallery` module
 */
class DefaultController extends Controller
{
    public $layout = 'mainpage';

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $category = GalleryCategory::find()->all();
        $work = GalleryWork::find()
            ->leftJoin('work_category', '`work_category`.`work_id` = `gallery_work`.`id`')
            ->limit(6)
            ->with('gallery_work')
            ->all();

        return $this->render('index',
            [
                'work' => $work,
                'category' => $category,
            ]);
    }
}
