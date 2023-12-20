<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Casestudy]].
 *
 * @see Casestudy
 */

 // CasestudyQuery类继承自yii\db\ActiveQuery类，用于查询Casestudy表
class CasestudyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Casestudy[]|array
     * 获取所有的Casestudy记录
     */
    public function all($db = null)
    {
        //调用父类的all方法
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Casestudy|array|null
     * 获取单个Casestudy记录
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
