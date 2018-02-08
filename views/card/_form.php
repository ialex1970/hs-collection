<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Card */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fid_set')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Set::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'crafting_cost')->textInput() ?>

    <?= $form->field($model, 'fid_type')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Type::find()->all(), 'id_type', 'name')) ?>

    <?= $form->field($model, 'fid_rarity')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Rarity::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
