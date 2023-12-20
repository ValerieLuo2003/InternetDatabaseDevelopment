<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于新闻界面
 */
namespace frontend\models;
use yii\data\Pagination;

use Yii;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property string $name
 * @property string $url
 */

// 定义News类  
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()//关联的数据库表名
    {
        return '{{%news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()//模型属性的验证规则
    {
        return [
            [['name', 'url'], 'required'],
            [['name', 'url'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()//用于显示的属性标签
    {
        return [
            'name' => 'Name',
            'url' => 'Url',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()//自定义查询器NewsQuery实例
    {
        return new NewsQuery(get_called_class());
    }
}
