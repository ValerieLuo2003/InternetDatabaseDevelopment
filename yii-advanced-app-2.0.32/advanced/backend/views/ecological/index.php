<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于后台生态环境影响管理
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EcologicalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ecological';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ecological-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ecological', ['create'], ['class' => 'btn btn-success']) ?>
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
            'picture',
            'picture2',
            //'picture3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
