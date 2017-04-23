<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Guru]].
 *
 * @see Guru
 */
class GuruQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Guru[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Guru|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}