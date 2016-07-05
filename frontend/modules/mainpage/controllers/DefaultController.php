<?php

namespace frontend\modules\mainpage\controllers;

use common\classes\Debug;
use common\classes\S;
use common\models\db\Diplom;
use common\models\db\GalleryCategory;
use common\models\db\GalleryWork;
use common\models\db\Reviews;
use common\models\db\Services;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `mainpage` module
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
        $reviews = Reviews::find()->all();
        $diploms = Diplom::find()->all();
        $category = GalleryCategory::find()->all();
        $work = GalleryWork::find()
            ->leftJoin('work_category', '`work_category`.`work_id` = `gallery_work`.`id`')
            ->with('gallery_work')
            ->limit(8)
            ->groupBy('`gallery_work`.`id`')
            ->orderBy('dt_add DESC')
            ->all();
        $services = Services::find()->all();
        return $this->render('index',
            [
                'reviews' => $reviews,
                'diplom' => $diploms,
                'work' => $work,
                'category' => $category,
                'services' => $services,
            ]);
    }

    public function actionRequest_stailing(){
        $mail = S::get('email');
        //Debug::prn($mail);

        Yii::$app->mailer->compose()
            ->setFrom('s-tale.ru')
            ->setTo($mail)
            ->setSubject('Заявка на стайлинг')
            ->setTextBody('Заявка на стайлинг')
            ->setHtmlBody('<b>Имя: </b>' . $_POST['name'] . '<br /> <b>Фамилия: </b>' . $_POST['lastname'] . '<br /><b>Email: </b>' . $_POST['email'] )
            ->send();

        echo '<h6>Спасибо. Наш специалист ответит вам в течении 10 минут, данные, предоставленные нам, не попадут 3-им лицам.</h6>';
    }
}
