<?php
/**
 * Team: 不想重装队
 * Coding By: 罗梓洋
 * 本文件用于各界观点界面
 */
namespace frontend\models;

use yii\base\Model;
use yii\base\BaseObject;
use common\models\Wishes;

class WishForm extends Model
{
	public $content;
	public $_lastError;

	public function rules()
	{
		return [
		['content','required'],
		['content','string','max'=>255]
		];
	}
   
   public function attributeLabels()
   {
   	 return [
   	 'id'=>'ID',
   	 'content'=>'内容'
   	 ];
   }
    
    public function getList()
    {
    	$model = new Wishes();
    	$res=$model->find()
    	       ->limit(8)
    	       ->with('user')
    	       ->orderBy(['id'=>SORT_DESC])
    	       ->asArray()
    	       ->all();
    	       return $res?:[];
    }
    /**
     * 留言保存
     * @return [type] [description]
     */
    public function create()
    {
      try{
        $model =new Wishes();
        $model->user_id =\Yii::$app->user->identity->id;
        $model->content =$this->content;
        $model->username =\Yii::$app->user->identity->username;
        $model->created_at = time();
         if(!$model->save())
          throw new  \Exception('保存失败');
        
           return true;
      }catch(\Exception $e){
        $this->_lastError = $e->getMessage();
        return false;
      }
    }




}