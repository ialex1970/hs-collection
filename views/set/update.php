<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Set */

$this->title = 'Update Set: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Sets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
