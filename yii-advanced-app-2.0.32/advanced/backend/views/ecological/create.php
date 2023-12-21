<?php
/**
 * Team: NKU-������װ
 * Coding By: ����ͮ
 * ���ļ����ں�̨��̬����Ӱ�����
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
