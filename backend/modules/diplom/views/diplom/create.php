<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\diplom\models\Diplom */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Дипломы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diplom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
