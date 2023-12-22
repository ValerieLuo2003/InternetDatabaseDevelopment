<?php 
namespace frontend\widgets\chat;

/**
 * Team: 不想重装队
 * Coding By: 罗梓洋
 * 本文件用于各界观点界面
 */
use Yii;
use yii\bootstrap\Widget;
use yii\base\BaseObject;
use frontend\models\WishForm;

class ChatWidget extends Widget
{
     public function run()
     {
     	$Wish = new WishForm();
     	$data['Wish'] = $Wish->getList();
     	return $this->render('index',['data'=>$data]);
     }

}