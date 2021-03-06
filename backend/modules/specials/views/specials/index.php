<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\specials\models\SpecialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Спецпредложения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specials-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'img',
            //'short_description',
            //'description:ntext',
            // 'slug',
            // 'dt_add',
            // 'dt_update',
            // 'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
