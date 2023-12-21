<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 此文档用于核污染带来的社会经济影响后台界面
 */
namespace backend\models;

/**
 * This is the ActiveQuery class for [[Economics]].
 *
 * @see Economics
 */
class EconomicsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Economics[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Economics|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
