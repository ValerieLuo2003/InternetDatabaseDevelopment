<?php
/**
 * Team: NKU-������װ
 * Coding By: ����ͮ
 * ���ļ����ں�̨��̬����Ӱ�����
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ecological */

$this->title = 'Update Ecological: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Energies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->num_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ecological-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
