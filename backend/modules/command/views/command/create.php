<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\command\models\Command */
/* @var $skills common\models\db\SkillsCommand */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Команда', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="command-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'skills' => $skills,
    ]) ?>

</div>
