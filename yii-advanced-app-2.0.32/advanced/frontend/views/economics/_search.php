<?php

/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于核污染对于社会经济造成的影响界面
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EconomicsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="economics-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'num_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'influence') ?>

    <?= $form->field($model, 'picture1') ?>

    <?= $form->field($model, 'picture2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
