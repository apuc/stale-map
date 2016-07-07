<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\studio\models\Studio */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Studios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'regions' => $regions,
    ]) ?>

</div>
