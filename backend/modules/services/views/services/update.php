<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\services\models\Services */

$this->title = 'Редактировать: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
?>
<div class="services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'benefitAll' => $benefitAll,
        'benefitSel' => $benefitSel,
        'img' => $img,
    ]) ?>

</div>
