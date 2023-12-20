<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于核污染对于社会经济造成的影响界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Economics */

$this->title = 'Create Economics';
$this->params['breadcrumbs'][] = ['label' => 'Economics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
