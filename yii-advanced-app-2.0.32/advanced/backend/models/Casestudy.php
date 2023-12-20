<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%Casestudy}}".
 *
 * @property string $country 国家
 * @property string $name 事件名
 * @property string $casecontent 案例内容
 * @property string $picture 图片
 * @property int $num_id 序号
 */
class Casestudy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%casestudy}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'name', 'casecontent', 'picture'], 'required'],
            [['casecontent'], 'string'],
            [['country', 'name', 'picture'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => '国家',
            'name' => '人名',
            'casecontent' => '观点',
            'picture' => '图片',
            'num_id' => '序号',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CasestudyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CasestudyQuery(get_called_class());
    }
}
