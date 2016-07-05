<?php

namespace backend\modules\franchise\controllers;

use common\models\db\Franchise;
use common\models\db\FranchiseImg;
use mihaildev\elfinder\InputFile;
use yii\web\Controller;

/**
 * Default controller for the `franchise` module
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
            foreach ($_POST['Fran'] as $key=>$value) {
                $model[$key] = $value;
            }
            Franchise::updateAll($model,['id' => 0]);
            $franciza = Franchise::find()->one();
            return $this->render('index',
                [
                    'model' => $franciza,
                ]
            );
        }
        else{


            $franciza = Franchise::find()->one();
            $img = FranchiseImg::find()->all();
            return $this->render('index',
                [
                    'model' => $franciza,
                    'img' => $img,
                ]
            );
        }
    }

    public function actionShow(){

        echo "<div class=\"imgUpload\">
            <div class=\"media__upload_img\"></div>" . InputFile::widget([
            'language'   => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'name'       => 'images[]',
            'id' => 'blog-images',

            'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control itemImg'],
            'buttonOptions' => ['class' => 'btn btn-primary'],
            'value' => '',
            'buttonName' => 'Выбрать изображение',
        ]) . "</div>";
    }
}
