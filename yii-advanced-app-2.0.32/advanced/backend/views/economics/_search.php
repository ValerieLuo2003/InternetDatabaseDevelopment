<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 此文档用于核污染带来的社会经济影响后台界面
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EconomicsSearch */
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
