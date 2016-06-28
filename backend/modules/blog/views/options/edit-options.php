<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * @var $title
 * @var $limit
 * @var $desc
 * @var $keywords
 */


$this->title = 'Настройки блога';
$this->params['breadcrumbs'][] = ['label' => 'Блог', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?/*= $form->field($title, 'value')->textInput(['maxlength' => true])->label('Заголовок страницы') */?>

    <?/*= $form->field($limit, 'value')->textInput(['maxlength' => true])->label('Количество статей в одной загрузке') */?>

    <?/*= $form->field($desc, 'value')->textInput(['maxlength' => true])->label('Meta Description') */?>

    --><?/*= $form->field($keywords, 'value')->textInput(['maxlength' => true])->label('Meta Keywords') */?>

    <?= Html::label('Заголовок страницы')?>
    <?= Html::textInput('title',$title->value,['class' => 'form-control']);?>

    <?= Html::label('Количество статей в одной загрузке')?>
    <?= Html::textInput('limit',$limit->value,['class' => 'form-control']);?>

    <?= Html::label('Meta Description')?>
    <?= Html::textInput('desc',$desc->value,['class' => 'form-control']);?>

    <?= Html::label('Meta Keywords')?>
    <?= Html::textInput('keywords',$keywords->value,['class' => 'form-control']);?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>