<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于核污染对于社会经济造成的影响界面
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Economics */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Economics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="economics-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->num_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->num_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'num_id',
            'name',
            'influence:ntext',
            'picture1',
            'picture2',
        ],
    ]) ?>

</div>
