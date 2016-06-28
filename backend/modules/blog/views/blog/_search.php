<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\blog\models\BlogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dt_add') ?>

    <?= $form->field($model, 'dt_update') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'short_description') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'images') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
