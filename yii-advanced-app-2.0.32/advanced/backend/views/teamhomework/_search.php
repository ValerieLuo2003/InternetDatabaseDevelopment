<?php
/**
 * Team: NKU-������װ
 * Coding By: ����ͮ
 * ���������ں�̨�Ŷ���ҵ����
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeamhomeworkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teamhomework-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'num_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'position') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
