<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Casestudy]].
 *
 * @see Casestudy
 */
class CasestudyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Casestudy[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Casestudy|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
