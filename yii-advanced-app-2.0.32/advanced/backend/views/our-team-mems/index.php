<?php
/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于后台团队成员页面
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\OurTeamMemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Our Team Mems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-team-mems-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Our Team Mems', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'id',
            'num_id',
            'major',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
