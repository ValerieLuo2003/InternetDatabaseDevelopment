<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于时间线界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Timeline */

$this->title = 'Create Timeline';
$this->params['breadcrumbs'][] = ['label' => 'Timelines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timeline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
