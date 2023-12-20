<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于时间线界面
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TimelineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timeline-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'num_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
