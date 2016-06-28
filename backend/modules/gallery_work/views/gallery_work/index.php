<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\gallery_work\models\GalleryWorkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Работы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-work-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавпить работу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'short_description',
            // 'thumb',
            // 'slug',
            // 'meta_description',
            // 'meta_keywords',
            // 'dt_add',
            // 'dt_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
