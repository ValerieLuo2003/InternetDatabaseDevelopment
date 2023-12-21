<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本代码用于后台团队作业下载
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%teamhomework}}".
 *
 * @property int $num_id 序号
 * @property string $name 作业名称
 * @property string $position 文件名称
 */
class Teamhomework extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%teamhomework}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'position'], 'required'],
            [['name', 'position'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_id' => '序号',
            'name' => '作业名称',
            'position' => '文件名称',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TeamhomeworkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeamhomeworkQuery(get_called_class());
    }
}
