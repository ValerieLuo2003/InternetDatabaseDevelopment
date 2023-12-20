<?php
/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于Internationalrelation界面
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "internationalrelation".
 *
 * @property int $num_id 序号
 * @property string $name 名称
 * @property string $influence 影响
 * @property string $picture 图片1
 * @property string $picture2 图片2
 * @property string $picture3 图片3
 */
class Internationalrelation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'internationalrelation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'influence', 'picture', 'picture2', 'picture3'], 'required'],
            [['influence'], 'string'],
            [['name', 'picture', 'picture2', 'picture3'], 'string', 'max' => 100],
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
            'picture' => '图片1',
            'picture2' => '图片2',
            'picture3' => '图片3',
        ];
    }

    /**
     * {@inheritdoc}
     * @return InternationalrelationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InternationalrelationQuery(get_called_class());
    }
}
