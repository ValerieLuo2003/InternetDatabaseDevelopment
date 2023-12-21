<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 此文档用于核污染带来的社会经济影响后台界面
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Economics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="economics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'influence')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'picture1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
