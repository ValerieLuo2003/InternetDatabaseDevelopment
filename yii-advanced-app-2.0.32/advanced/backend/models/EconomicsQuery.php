<?php
/**
 * Team: NKU-������װ
 * Coding By: ����ͮ
 * ���ĵ����ں���Ⱦ��������ᾭ��Ӱ���̨����
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
