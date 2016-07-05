<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\specials\models\Specials */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Спецпредложения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
