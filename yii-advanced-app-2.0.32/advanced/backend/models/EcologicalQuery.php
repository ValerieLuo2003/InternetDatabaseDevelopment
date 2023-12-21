<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于后台生态环境影响管理
 */
namespace backend\models;

/**
 * This is the ActiveQuery class for [[Ecological]].
 *
 * @see Ecological
 */
class EcologicalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Ecological[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Ecological|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
