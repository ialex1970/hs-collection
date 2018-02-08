<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Card', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_card',
            'name',
            [
                'label' => 'Дополнение',
                'attribute' => 'fid_set',
                'value' => function ($model) {
                    return $model->set->name;
                }
            ],
            'crafting_cost',
            [
                'label' => 'Класс',
                'attribute' => 'fid_type',
                'value' => function ($model) {
                    return $model->type->name;
                }
            ],
            [
                'label' => 'Редкость',
                'attribute' => 'fid_rarity',
                'value' => function ($model) {
                    return $model->rarity->name;
                }
            ],
            //'fid_rarity',
            //'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
