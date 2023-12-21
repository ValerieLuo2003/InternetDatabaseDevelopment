<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Personhomework]].
 *
 * @see Personhomework
 */
class PersonhomeworkQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Personhomework[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Personhomework|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
