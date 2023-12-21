<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于后台团队作业下载
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeamhomeworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teamhomeworks';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-index">

    <div class="jumbotron">
        <h1><p align="center">团队作业</p></h1>

        <p align="center"style="font-size:20px">团队成员：罗梓洋、李晓彤、姜涵、师雅卉</p>
    </div>
    <body>
        <p style="text-align: center;"> 
            <img src="static/picture/nku2.png" alt="" height = "150" >
        </p>
    </body>

    <div class="body-content">
        <div class="row">

        <?php foreach ($Teamhomework as $th) : ?>
            <div class="col-lg-4">
                <p style="font-size:24px;color:navy"><b><?= $th->num_id ?>. </b>  <b><?= $th->name ?>：</b>
                <a href="../../data/team/<?=$th->position?>"  ><span style="font-size:20px;">文件下载&nbsp;&nbsp;&nbsp;</span><br /></a></p>
            </div>
        <?php endforeach; ?>

        <div class="col-lg-4">
                <p style="font-size:24px;color:navy">  <b>数据库文件：</b>
                <a href="../../data/install.sql"  ><span style="font-size:20px;">文件下载&nbsp;&nbsp;&nbsp;</span><br /></a></p>
            </div>

        </div>
        <p align="center"><a class="btn btn-default btn-info" href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment">项目Github链接 >></a></p>

    </div>
</div>

