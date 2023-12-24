<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Countriesview */

$this->title = 'Update casestudy: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'casestudy', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->num_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="countriesview-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
