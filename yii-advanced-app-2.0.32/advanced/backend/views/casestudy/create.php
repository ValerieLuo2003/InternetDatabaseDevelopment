<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Countriesview */

$this->title = 'Create casestudy';
$this->params['breadcrumbs'][] = ['label' => 'casestudy', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="casestudy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
