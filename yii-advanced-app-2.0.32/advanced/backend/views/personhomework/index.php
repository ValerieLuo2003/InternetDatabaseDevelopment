<?php
/**
 * Team: 不想重装队
 * Coding By: 罗梓洋
 * 本文件用于后台个人作业下载
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PersonhomeworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personhomeworks';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><p align="center">个人作业</p></h1>

        <p align="center"style="font-size:20px">团队成员：罗梓洋、李晓彤、姜涵、师雅卉</p>
    </div>
<div class="contain">
    <body>
        <p style="text-align: center;">
            <img src="static/picture/nku2.png" alt="" height = "150" >
        </p>
    </body>
</div>
    <div class="body-content">
        <div class="row">


        <?php foreach ($Personhomework as $ph) : ?>
            <div class="col-lg-6">
                <h3><p style="color:navy"><?=$ph->name?></p></h3>
                
                <p>
                    <p><span style="font-size:24px;">个人作业一：</span>
                    <a href="../../data/personal/<?=$ph->hw1?>"  ><span style="font-size:24px;">zip下载&nbsp;&nbsp;&nbsp;</span><br /></a></p>
                    

                    <p><span style="font-size:24px;">个人作业二：</span>
                    <a href="../../data/personal/<?=$ph->hw2?>"  ><span style="font-size:24px;">zip下载&nbsp;&nbsp;&nbsp;</span><br /></a></p>
                    
                    <p><span style="font-size:24px;">个人作业三：</span>
                    <a href="../../data/personal/<?=$ph->hw3?>"  ><span style="font-size:24px;">zip下载&nbsp;&nbsp;&nbsp;</span><br /></a></p>
                    

                </p>

                <p><a class="btn btn-default" href="<?=$ph->github?>">进入Github &raquo;</a></p>
            </div>
        <?php endforeach; ?>

        </div>

    </div>
</div>

