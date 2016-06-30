<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 30.06.2016
 * Time: 12:12
 */

namespace frontend\widgets;


use common\models\db\Diplom;
use yii\base\Widget;

class ShowDiplom extends Widget
{
    public function run(){
        $diploms = Diplom::find()->all();
        return $this->render('diplom',
            [
                'diplom' => $diploms,
            ]);
    }
}