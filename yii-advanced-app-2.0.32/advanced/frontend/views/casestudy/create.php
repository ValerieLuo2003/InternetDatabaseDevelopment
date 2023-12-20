<?php
/**
 * Team: 不想重装队
 * Coding By: 罗梓洋
 * 本文件用于案例研究界面
 */
use yii\helpers\Html;

$this->title = 'Create Casestudy';
$this->params['breadcrumbs'][] = ['label' => 'Casestudy', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="casestudy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
