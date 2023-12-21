<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Personhomework */

$this->title = 'Create Personhomework';
$this->params['breadcrumbs'][] = ['label' => 'Personhomeworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personhomework-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
