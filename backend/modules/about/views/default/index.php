<?php
/**
 * @var $model common\models\db\About
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Страница "О нас"';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="about-page">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="about-form">

        <?php

        $form = ActiveForm::begin(); ?>

        <?= Html::label('Заголовок страницы'); ?>
        <?= Html::textInput('About[title]', $model->title, ['class' => 'form-control']); ?>

        <?= Html::label('meta description'); ?>
        <?= Html::textInput('About[meta_description]', $model->meta_description, ['class' => 'form-control']); ?>


        <?= Html::label('meta_keywords'); ?>
        <?= Html::textInput('About[meta_keywords]', $model->meta_keywords, ['class' => 'form-control']); ?>

        <?= Html::label('Первая часть текста'); ?>
        <?= \mihaildev\ckeditor\CKEditor::widget(['name' => 'About[short_description]', 'value' => $model->short_description])?>

        <?= Html::label('Вторая часть текста'); ?>
        <?= \mihaildev\ckeditor\CKEditor::widget(['name' => 'About[description]', 'value' => $model->description])?>


        <?= Html::submitButton('Сохранить',['class' => 'btn btn-success']); ?>

        <?php ActiveForm::end(); ?>

    </div>
</div>

