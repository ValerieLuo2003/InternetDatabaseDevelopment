<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于时间线界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Timeline */

$this->title = 'Update Timeline: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Timelines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->num_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="timeline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
