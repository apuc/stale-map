<?php
/**
 * @var $model common\models\db\About
 * @var $work common\models\db\GalleryWork
 */
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
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

        <?php
        $selectWorkArr =[];
        foreach ($selectWork as $item) {
            $selectWorkArr[] = $item->work_id;
        }
        ?>
        <?= Html::label('Работы которые показывать на этой странице'); ?>
        <?= Select2::widget([
            'name' => 'work',
            'value' => $selectWorkArr, // initial value
            'data' => \yii\helpers\ArrayHelper::map($work, 'id', 'name'),
            'options' => ['placeholder' => 'Select a color ...', 'multiple' => true],
            'pluginOptions' => [
                'tags' => true,
                'maximumInputLength' => 10
            ],
        ]);
        ?>




        <?php
        $preview = [];
        $previewConfig = [];
        if(!$model->isNewRecord){
            foreach($img as $i){
                $preview[] = "<img src='$i->img' class='file-preview-image'>";
                $previewConfig[] = [
                    'caption' => '',
                    'url' => '/secure/about/default/delete_file?id=' . $i->id
                ];
            }
        }

        echo '<label class="control-label">Добавить фото</label>';


        echo FileInput::widget([
            'name' => 'file[]',
            'id' => 'input-5',
            'attribute' => 'attachment_1',
            'value' => '@frontend/media/img/1.png',
            'options' => [
                'multiple' => true,
                'showCaption' => false,
                'showUpload' => false,
                'uploadAsync'=> false,
            ],
            'pluginOptions' => [
                'uploadUrl' => Url::to(['/about/default/upload_file']),
                'language' => "ru",
                'previewClass' => 'hasEdit',
                'uploadAsync'=> false,
                'showUpload' => false,
                'dropZoneEnabled' => false,
                'overwriteInitial' => false,
                'initialPreview' => $preview,
                'initialPreviewConfig' => $previewConfig
            ],
        ]);

        ?>

        <?= Html::submitButton('Сохранить',['class' => 'btn btn-success', 'id' => 'saveInfo']); ?>
        <?php ActiveForm::end(); ?>

    </div>
</div>

