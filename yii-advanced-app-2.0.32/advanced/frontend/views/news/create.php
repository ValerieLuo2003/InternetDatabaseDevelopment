<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于新闻界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\News */
// 新闻界面的创建操作

$this->title = 'Create News';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
