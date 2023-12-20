<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "economics".
 *
 * @property int $num_id 序号
 * @property string $name 名称
 * @property string $influence 影响
 * @property string $picture1 图片1
 * @property string $picture2 图片2
 */
class Economics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'economics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'influence', 'picture1', 'picture2'], 'required'],
            [['influence'], 'string'],
            [['name', 'picture1', 'picture2'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_id' => '序号',
            'name' => '名称',
            'influence' => '影响',
            'picture1' => '图片1',
            'picture2' => '图片2',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EconomicsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EconomicsQuery(get_called_class());
    }
}
