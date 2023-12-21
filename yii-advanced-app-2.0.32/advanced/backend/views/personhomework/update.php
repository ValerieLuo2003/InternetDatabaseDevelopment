<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Personhomework */

$this->title = 'Update Personhomework: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Personhomeworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->num_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="personhomework-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
