<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于时间线界面
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property string $name 新闻标题
 * @property string $date 发布时间
 * @property string $url 链接
 * @property int $num_id 序号
 */
class Timeline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date', 'url'], 'required'],
            [['date'], 'safe'],
            [['name', 'url'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => '新闻标题',
            'date' => '发布时间',
            'url' => '链接',
            'num_id' => '序号',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TimelineQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TimelineQuery(get_called_class());
    }
}
