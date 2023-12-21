<?php

/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于后台团队管理界面
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%ourteammems}}".
 *
 * @property string $name 成员姓名
 * @property int $id 学号
 * @property int $num_id 序号
 * @property string $major 专业
 */
class OurTeamMems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ourteammems}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id', 'major'], 'required'],
            [['id'], 'integer'],
            [['name', 'major'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => '成员姓名',
            'id' => '学号',
            'num_id' => '序号',
            'major' => '专业',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OurTeamMemsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OurTeamMemsQuery(get_called_class());
    }
}
