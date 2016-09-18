<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pais]].
 *
 * @see Pais
 */
class DQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Pais[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pais|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
