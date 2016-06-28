<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\gallery_work\models\GalleryWorkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-work-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'short_description') ?>

    <?php // echo $form->field($model, 'thumb') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'meta_description') ?>

    <?php // echo $form->field($model, 'meta_keywords') ?>

    <?php // echo $form->field($model, 'dt_add') ?>

    <?php // echo $form->field($model, 'dt_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
