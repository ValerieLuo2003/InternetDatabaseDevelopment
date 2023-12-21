<?php

/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于后台团队管理界面
 */
namespace backend\models;

/**
 * This is the ActiveQuery class for [[OurTeamMems]].
 *
 * @see OurTeamMems
 */
class OurTeamMemsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OurTeamMems[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OurTeamMems|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
