<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gallery_work\models\GalleryWork */
/* @var $category common\models\db\GalleryCategory */

$this->title = 'Редактировать: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Работы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="gallery-work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'category' => $category,
        'catwork' => $catwork,
        'selcat' => $selcat,
        'img' => $img,
    ]) ?>

</div>
