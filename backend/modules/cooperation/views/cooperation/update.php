<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\cooperation\models\Cooperation */

$this->title = 'Редактировать: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудничество', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="cooperation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
