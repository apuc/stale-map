<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\blog\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',

            'title',
            'short_description',
            'dt_add',
            'dt_update',
            // 'description:ntext',
            // 'images',
            // 'slug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
