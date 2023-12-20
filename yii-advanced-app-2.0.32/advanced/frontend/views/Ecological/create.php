<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于核污染对生态环境影响界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Energy */

$this->title = 'Create Energy';
$this->params['breadcrumbs'][] = ['label' => 'Energies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="energy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
