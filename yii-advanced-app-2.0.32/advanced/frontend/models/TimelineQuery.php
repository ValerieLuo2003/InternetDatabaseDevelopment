<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于时间线界面
 */
namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Timeline]].
 *
 * @see Timeline
 */
class TimelineQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Timeline[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Timeline|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
