<?php
/**
 * Team: 不想重装队
 * Coding By: 罗梓洋
 * 本文件用于各界观点界面
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%comment}}".
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property string $content 内容
 * @property string $username 用户名
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%comment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'content',  'username'], 'required'],
            [['user_id'], 'integer'],
            [['content', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户id',
            'content' => '内容',
            'username' => '用户名',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CommentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommentQuery(get_called_class());
    }
}
