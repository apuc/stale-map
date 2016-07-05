<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\command\models\Command */
/* @var $skills common\models\db\SkillsCommand */
/* @var $skillsSelect common\models\db\CommandSkills */

$this->title = 'Редактировать: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Команда', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];

?>
<div class="command-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'skills' => $skills,
        'skillsSelect' => $skillsSelect,
    ]) ?>

</div>
