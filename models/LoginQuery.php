<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Login]].
 *
 * @see Login
 */
class LoginQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Login[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Login|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}