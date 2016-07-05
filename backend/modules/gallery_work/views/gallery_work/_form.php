<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\gallery_work\models\GalleryWork */
/* @var $form yii\widgets\ActiveForm */
/* @var $category common\models\db\GalleryCategory */
?>

<div class="gallery-work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
<?php $catwork->category_id = $selcat ?>
    <?= $form->field($catwork, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map($category,'id', 'name'),
        ['prompt' => 'Выберите категорию','multiple'=>true,'2'=>['selected'=>true]])?>



    <?/*= $form->field($model, 'description')->textarea(['rows' => 6]) */?>

    <?php echo $form->field($model, 'description')->widget(CKEditor::className(),[
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'full',
            'inline' => false,
            'path' => 'frontend/web/media/upload',
        ]),
    ]);?>

    <?= $form->field($model, 'short_description')->textInput(['maxlength' => true]) ?>

    <div class="imgUpload">
        <div class="media__upload_img"><img src="<?=$model->thumb;?>" width="100px"/></div>

        <?php
        echo InputFile::widget([
            'language'   => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'name'       => 'GalleryWork[thumb]',
            'id' => 'gallerywork-thumb',

            'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control itemImg'],
            'buttonOptions' => ['class' => 'btn btn-primary'],
            'value' => $model->thumb,
            'buttonName' => 'Выбрать изображение обложки'
        ]);
        ?>
    </div>

    <?php
    $preview = [];
    $previewConfig = [];
    if(!$model->isNewRecord){
        foreach($img as $i){
            $preview[] = "<img src='$i->img' class='file-preview-image'>";
            $previewConfig[] = [
                'caption' => '',
                'url' => '/secure/gallery_work/gallery_work/delete_file?id=' . $i->id
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
            'uploadUrl' => Url::to(['/gallery_work/gallery_work/upload_file']),
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

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_video')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'id' => 'saveInfo']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
