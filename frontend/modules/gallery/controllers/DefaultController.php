<?php

namespace frontend\modules\gallery\controllers;

use common\classes\Debug;
use common\models\db\GalleryCategory;
use common\models\db\GalleryWork;
use common\models\db\GalleryWorkImg;
use yii\web\Controller;

/**
 * Default controller for the `gallery` module
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

        $category = GalleryCategory::find()->all();
        $work = GalleryWork::find()
            ->leftJoin('work_category', '`work_category`.`work_id` = `gallery_work`.`id`')
            ->with('gallery_work')
            ->orderBy('dt_add DESC')
            ->all();

        $imgOneWork = GalleryWorkImg::find()->where(['work_id' => $work[0]->id])->all();

        return $this->render('index',
            [
                'work' => $work,
                'category' => $category,
                'imgOneWork' => $imgOneWork,
            ]);
    }

    public function actionShow_photo(){
        $work = GalleryWork::find()->where(['id' => $_POST['id']])->one();

        $img = GalleryWorkImg::find()->where(['work_id' => $_POST['id']])->all();
        echo $this->renderPartial('photo-slider', ['img' => $img, 'work' => $work]);
    }

    public function actionView($slug){
        $work = GalleryWork::find()
            ->leftJoin('gallery_work_img', '`gallery_work_img`.`work_id` = `gallery_work`.`id`')
            ->where(['slug' => $slug])
            ->with('gallery_work_img')
            ->one();
        return $this->render('view',
            [
                'work' => $work,
            ]);
    }
}
