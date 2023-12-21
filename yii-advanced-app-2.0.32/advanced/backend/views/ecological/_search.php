<?php
/**
 * Team: NKU-������װ
 * Coding By: ����ͮ
 * ���ļ����ں�̨��̬����Ӱ�����
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EcologicalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ecological-search">

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

    <?= $form->field($model, 'picture') ?>

    <?= $form->field($model, 'picture2') ?>

    <?php // echo $form->field($model, 'picture3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
