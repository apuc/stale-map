<?php
/**
 * @var $model common\models\db\Franchise
 */

use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


$this->title = 'Страница "Франшиза"';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="about-page">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="about-form">

        <?php

        $form = ActiveForm::begin(); ?>

        <?= Html::label('Заголовок страницы'); ?>
        <?= Html::textInput('Fran[title]', $model->title, ['class' => 'form-control']); ?>

        <?= Html::label('meta description'); ?>
        <?= Html::textInput('Fran[meta_description]', $model->meta_description, ['class' => 'form-control']); ?>


        <?= Html::label('meta_keywords'); ?>
        <?= Html::textInput('Fran[meta_keywords]', $model->meta_keywords, ['class' => 'form-control']); ?>

        <?= Html::label('Текст'); ?>
        <?= \mihaildev\ckeditor\CKEditor::widget(['name' => 'Fran[text]', 'value' => $model->text])?>

        <h3>Презинтация по слайдам</h3>
        <div class="imgUpload">
            <div class="media__upload_img"><!--<img src="<?/*=$model->images;*/?>" width="100px"/>--></div>

            <?php
            echo InputFile::widget([
                'language'   => 'ru',
                'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
                'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                'name'       => 'images[]',
                'id' => 'blog-images',

                'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
                'options'       => ['class' => 'form-control itemImg'],
                'buttonOptions' => ['class' => 'btn btn-primary'],
                'value' => $img->img,
                'buttonName' => 'Выбрать изображение',
            ]);
            ?>
        </div>
        <a href="#" class="addSlid">Добавить слайд</a>
        <?= Html::submitButton('Сохранить',['class' => 'btn btn-success']); ?>
        <?php ActiveForm::end(); ?>

    </div>
</div>