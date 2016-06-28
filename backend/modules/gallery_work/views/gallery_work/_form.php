<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
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
            'buttonName' => 'Выбрать изображение'
        ]);
        ?>
    </div>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
