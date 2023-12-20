<?php
/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于Internationalrelation界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Internationalrelation */

$this->title = 'Update Internationalrelation: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Internationalrelations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->num_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="internationalrelation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
