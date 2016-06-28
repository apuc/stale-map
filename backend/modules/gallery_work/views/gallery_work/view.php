<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\gallery_work\models\GalleryWork */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Gallery Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-work-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'category_id',
            'description:ntext',
            'short_description',
            'thumb',
            'slug',
            'meta_description',
            'meta_keywords',
            'dt_add',
            'dt_update',
        ],
    ]) ?>

</div>
