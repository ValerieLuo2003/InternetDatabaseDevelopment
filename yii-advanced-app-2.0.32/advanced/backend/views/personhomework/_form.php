<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Personhomework */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personhomework-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hw1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hw2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hw3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'github')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
