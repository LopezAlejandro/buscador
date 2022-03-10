<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Prg]].
 *
 * @see Prg
 */
class PrgQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Prg[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Prg|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
