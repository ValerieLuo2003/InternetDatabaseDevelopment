<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 此文档用于核污染带来的社会经济影响后台界面
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EconomicsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Economics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economics-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Economics', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'num_id',
            'name',
            'influence:ntext',
            'picture1',
            'picture2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
