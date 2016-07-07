<?php

namespace frontend\modules\mainpage\controllers;

use common\classes\Debug;
use common\classes\S;
use common\models\db\Diplom;
use common\models\db\GalleryCategory;
use common\models\db\GalleryWork;
use common\models\db\Reviews;
use common\models\db\Services;
use common\models\db\Subscription;
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
            ->setFrom('admin@s-tale.ru')
            ->setTo($mail)
            ->setSubject('Заявка на стайлинг')
            ->setTextBody('Заявка на стайлинг')
            ->setHtmlBody('<b>Имя: </b>' . $_POST['name'] . '<br /> <b>Фамилия: </b>' . $_POST['lastname'] . '<br /><b>Email: </b>' . $_POST['email'] )
            ->send();

        echo '<h6>Спасибо. Наш специалист ответит вам в течении 10 минут, данные, предоставленные нам, не попадут 3-им лицам.</h6>';
    }

    public function actionRequest_sub(){
        $subscription = new Subscription();
        $subscription->name = $_POST['name'];
        $subscription->email = $_POST['email'];
        $subscription->save();
        echo "<h3>Спасибо за подписку!!!</h3>";
    }

    public function actionFeedback(){
        $mail = S::get('email');
        Yii::$app->mailer->compose()
            ->setFrom('admin@s-tale.ru')
            ->setTo($mail)
            ->setSubject('Сообщение с сайта')
            ->setTextBody('Сообщение с сайта')
            ->setHtmlBody('<b>Имя: </b>' . $_POST['name']  . '<br /><b>Email: </b>' . $_POST['email'] . '<br /> <b>Текст: </b>' . $_POST['text'])
            ->send();

        echo '<h3>Спасибо за сообщение.</h3>';
    }

    public function actionRequest_parent(){
        $mail = S::get('email');
        Yii::$app->mailer->compose()
            ->setFrom('admin@s-tale.ru')
            ->setTo($mail)
            ->setSubject('Анкета партнера')
            ->setTextBody('Анкета партнера')
            ->setHtmlBody('<b>Название: </b>' . $_POST['name']  . '<br /><b>Email: </b>' . $_POST['email'] . '<br /> <b>Вид дейтельности: </b>' . $_POST['vid'] . '<br /> <b>Обород за посл.год: </b>' . $_POST['oborod'] . '<br /> <b>Фактический адрес: </b>' . $_POST['address'] . '<br /> <b>Контактное лицо: </b>' . $_POST['contact'] . '<br /> <b>Телефон: </b>' . $_POST['phone'] . '<br /> <b>Сайт: </b>' . $_POST['site'] )
            ->send();

        echo '<h3>Спасибо за сообщение. Мы с Вами свяжемся.</h3>';
    }

    public function actionRequest_individual_design(){
        $mail = S::get('email');
        Yii::$app->mailer->compose()
            ->setFrom('admin@s-tale.ru')
            ->setTo($mail)
            ->setSubject('Заявка на индивидуальный дизайн')
            ->setTextBody('Заявка на индивидуальный дизайн')
            ->setHtmlBody('<b>Телефон: </b>' . $_POST['phone'])
            ->send();

        echo '<h3>Спасибо. Наш специалист ответит вам в течении 10 минут, данные, предоставленные нам, не попадут 3-им лицам.</h3>';
    }

    public function actionRequest_taping(){
        $mail = S::get('email');
        Yii::$app->mailer->compose()
            ->setFrom('admin@s-tale.ru')
            ->setTo($mail)
            ->setSubject('Оклейка по выезду')
            ->setTextBody('Оклейка по выезду')
            ->setHtmlBody('<b>Телефон: </b>' . $_POST['phone'] . '<br /> <b>Адрес: </b>' . $_POST['address'])
            ->send();

        echo '<h3>Спасибо. Наш специалист ответит вам в течении 10 минут, данные, предоставленные нам, не попадут 3-им лицам.</h3>';
    }
}
