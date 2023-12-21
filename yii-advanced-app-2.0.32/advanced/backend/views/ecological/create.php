<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于后台生态环境影响管理
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ecological */

$this->title = 'Create Ecological';
$this->params['breadcrumbs'][] = ['label' => 'Energies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ecological-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
