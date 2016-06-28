<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\gallery_work\models\GalleryWork */
/* @var $category common\models\db\GalleryCategory */

$this->title = 'Добавить работу';
$this->params['breadcrumbs'][] = ['label' => 'Работы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'category' => $category,
        'catwork' => $catwork,
    ]) ?>

</div>
