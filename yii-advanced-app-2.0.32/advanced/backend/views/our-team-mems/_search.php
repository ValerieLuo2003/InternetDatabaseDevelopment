<?php

/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于后台团队管理界面
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OurTeamMemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-team-mems-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'num_id') ?>

    <?= $form->field($model, 'major') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
