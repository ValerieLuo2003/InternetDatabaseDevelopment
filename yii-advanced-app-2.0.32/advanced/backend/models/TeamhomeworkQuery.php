<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本代码用于后台团队作业下载
 */
namespace backend\models;

/**
 * This is the ActiveQuery class for [[Teamhomework]].
 *
 * @see Teamhomework
 */
class TeamhomeworkQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Teamhomework[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Teamhomework|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
