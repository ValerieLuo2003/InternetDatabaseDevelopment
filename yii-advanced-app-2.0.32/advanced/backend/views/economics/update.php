<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 此文档用于核污染带来的社会经济影响后台界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Economics */

$this->title = 'Update Economics: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Economics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->num_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="economics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
