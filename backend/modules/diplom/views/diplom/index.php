<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\diplom\models\DiplomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Дипломы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diplom-index">

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
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
