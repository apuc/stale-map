<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\studio\models\StudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Студии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'city_id',
            'address',
            'address_dop',
            // 'phone',
            // 'slug',
            // 'description:ntext',
            // 'meta_keyword',
            // 'meta_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
