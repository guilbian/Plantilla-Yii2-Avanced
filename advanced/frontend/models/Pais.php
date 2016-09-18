<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%pais}}".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Departamento[] $departamentos
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pais}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 50],
            [['nombre'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['id_pais' => 'id']);
    }

    /**
     * @inheritdoc
     * @return DQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DQuery(get_called_class());
    }
}
