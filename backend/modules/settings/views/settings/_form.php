<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php
    if(!$model->isNewRecord){
        foreach($img as $i){
            $preview[] = "<img src='/$i->img' class='file-preview-image'>";
            $previewConfig[] = [
                'caption' => '',
                'url' => '/gallery_work/gallery_work/delete_file?id=' . $i->id
            ];
        }
    }

    ?>
    <?php ActiveForm::end(); ?>

</div>
