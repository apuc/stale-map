<?php

use kartik\select2\Select2;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\command\models\Command */
/* @var $form yii\widgets\ActiveForm */
/* @var $skills common\models\db\SkillsCommand */
/* @var $skillsSelect common\models\db\CommandSkills */
?>

<div class="command-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'photo')->textInput(['maxlength' => true]) */?>

    <div class="imgUpload">
        <div class="media__upload_img"><img src="<?=$model->photo;?>" width="100px"/></div>

        <?php
        echo InputFile::widget([
            'language'      => 'ru',
            'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'name'          => 'Command[photo]',
            'id'            => 'command-photo',

            'template'      => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control itemImg'],
            'buttonOptions' => ['class' => 'btn btn-primary'],
            'value'         => $model->photo,
            'buttonName'    => 'Выбрать изображение'
        ]);
        ?>
    </div>

    <?php
    $value = [];
    if(!$model->isNewRecord){

        foreach ($skillsSelect as $item) {
            $value[] = $item->skills_id;
        }
    }

        echo '<label class="control-label">Выберите навыки</label>';
        echo Select2::widget([
            'name' => 'skills',
            'data' => \yii\helpers\ArrayHelper::map($skills, 'id', 'title'),
            'value' => $value,
            'options' => [
                'placeholder' => 'Выберите навыки ...',
                'multiple' => true
                ],
            ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
