<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%personhomework}}".
 *
 * @property int $num_id
 * @property string $name 名字
 * @property string $hw1 作业1
 * @property string $hw2 作业2
 * @property string $hw3 作业3
 * @property string $github GitHub链接
 */
class Personhomework extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%personhomework}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'hw1', 'hw2', 'hw3', 'github'], 'required'],
            [['name', 'hw1', 'hw2', 'hw3', 'github'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_id' => 'Num ID',
            'name' => '名字',
            'hw1' => '作业1',
            'hw2' => '作业2',
            'hw3' => '作业3',
            'github' => 'GitHub链接',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PersonhomeworkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonhomeworkQuery(get_called_class());
    }
}
