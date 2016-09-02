<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\services\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'img')->textInput(['maxlength' => true]) */?>
    <div class="imgUpload">
        <div class="media__upload_img"><img src="<?=$model->img;?>" width="100px"/></div>

        <?php
        echo "<label>Выберите большое изображение</label>";
        echo InputFile::widget([
            'language'   => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'name'       => 'Services[img]',
            'id' => 'services-img',

            'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control itemImg'],
            'buttonOptions' => ['class' => 'btn btn-primary'],
            'value' => $model->img,
            'buttonName' => 'Выбрать изображение'
        ]);
        ?>
    </div>


    <?/*= $form->field($model, 'icon')->textInput(['maxlength' => true]) */?>
    <div class="imgUpload">
        <div class="media__upload_icon"><img src="<?=$model->icon;?>" width="100px"/></div>

        <?php
        echo "<label>Выберите иконку</label>";
        echo InputFile::widget([
            'language'   => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'name'       => 'Services[icon]',
            'id' => 'services-icon',

            'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control itemIcon'],
            'buttonOptions' => ['class' => 'btn btn-primary'],
            'value' => $model->icon,
            'buttonName' => 'Выбрать изображение'
        ]);
        ?>
    </div>
    <?/*= $form->field($model, 'description')->textarea(['rows' => 6]) */?>

    <?php echo $form->field($model, 'description')->widget(CKEditor::className(),[
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'full',
            'inline' => false,
            'path' => 'frontend/web/media/upload',
        ]),
    ]);?>



    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>


    <?php
    echo '<label class="control-label">Выберите преимущества</label>';
    echo Select2::widget([
        'name' => 'benefit',
        'data' => \yii\helpers\ArrayHelper::map($benefitAll, 'id', 'name'),
        'value' => (!$model->isNewRecord) ? \yii\helpers\ArrayHelper::map($benefitSel, 'id', 'benefit_id') : [],
        'options' => [
            'placeholder' => 'Выберите преимущества ...',
            'multiple' => true
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
                'url' => '/secure/services/services/delete_file?id=' . $i->id
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
            'uploadUrl' => Url::to(['/services/services/upload_file']),
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


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'id' => 'saveInfo']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
