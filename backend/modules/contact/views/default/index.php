<?php
/**
 * @var $model common\models\db\ContactPage

 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


$this->title = 'Страница "Контакты"';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="about-page">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="about-form">

        <?php

        $form = ActiveForm::begin(); ?>

        <?= Html::label('Заголовок страницы'); ?>
        <?= Html::textInput('Contact[title]', $model->title, ['class' => 'form-control']); ?>

        <?= Html::label('meta description'); ?>
        <?= Html::textInput('Contact[meta_description]', $model->meta_description, ['class' => 'form-control']); ?>


        <?= Html::label('meta_keywords'); ?>
        <?= Html::textInput('Contact[meta_keywords]', $model->meta_keywords, ['class' => 'form-control']); ?>

        <?= Html::label('Адрес'); ?>
        <?= Html::textInput('Contact[address]', $model->address, ['class' => 'form-control']); ?>


<div class="phone">
        <?= Html::label('Телефоны'); ?>
        <?php $i=0; foreach ($phone as $item) { ?>
            <div><input type="text" class="form-control leftInput" value="<?= $item->phone; ?>" name="Phone[]"><?=($i != 0) ? '<span class="delPhone">Удалить</span>' : '' ?></div>
       <?php $i++; }?>

        <?= Html::a('Добавить телефон', '#', ['class' => 'addPhone']); ?>
</div>

        <?= Html::label('WhatsApp'); ?>
        <?= Html::textInput('Contact[whats_app]', $model->whats_app, ['class' => 'form-control']); ?>

        <?= Html::label('email'); ?>
        <?= Html::textInput('Contact[email]', $model->email, ['class' => 'form-control']); ?>

        <?= Html::label('Ссылка ВК'); ?>
        <?= Html::textInput('Contact[link_vk]', $model->link_vk, ['class' => 'form-control']); ?>

        <?= Html::label('Ссылка Фейсбук'); ?>
        <?= Html::textInput('Contact[link_fb]', $model->link_fb, ['class' => 'form-control']); ?>

        <?= Html::label('Ссылка Инстаграмм'); ?>
        <?= Html::textInput('Contact[link_inst]', $model->link_inst, ['class' => 'form-control']); ?>




        <?= Html::submitButton('Сохранить',['class' => 'btn btn-success']); ?>
        <?php ActiveForm::end(); ?>

    </div>
</div>

