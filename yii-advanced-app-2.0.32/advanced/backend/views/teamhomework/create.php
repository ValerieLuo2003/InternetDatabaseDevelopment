<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本代码用于后台团队作业下载
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Teamhomework */

$this->title = 'Create Teamhomework';
$this->params['breadcrumbs'][] = ['label' => 'Teamhomeworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teamhomework-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
