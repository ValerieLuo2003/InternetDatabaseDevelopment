<?php

namespace frontend\models;

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
     * @return Ecological|array|null     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
