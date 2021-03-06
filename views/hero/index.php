<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HeroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Heroes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hero-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hero', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Герой',
                'attribute' => 'name'
            ],
            [
                'label' => 'Класс',
                'attribute' => 'fid_type',
                'value' => function($model) {return $model->type->name;}
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
