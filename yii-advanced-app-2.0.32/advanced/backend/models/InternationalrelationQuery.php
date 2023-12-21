<?php
/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于Internationalrelation界面
 */
namespace backend\models;

/**
 * This is the ActiveQuery class for [[Internationalrelation]].
 *
 * @see Internationalrelation
 */
class InternationalrelationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Internationalrelation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Internationalrelation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
