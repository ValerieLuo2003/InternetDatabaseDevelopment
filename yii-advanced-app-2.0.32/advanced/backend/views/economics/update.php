<?php
/**
 * Team: NKU-������װ
 * Coding By: ����ͮ
 * ���ĵ����ں���Ⱦ��������ᾭ��Ӱ���̨����
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
