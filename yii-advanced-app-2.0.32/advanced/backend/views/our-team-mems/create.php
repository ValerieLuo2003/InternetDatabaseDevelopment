<?php

/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于后台团队管理界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OurTeamMems */

$this->title = 'Create Our Team Mems';
$this->params['breadcrumbs'][] = ['label' => 'Our Team Mems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-team-mems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
