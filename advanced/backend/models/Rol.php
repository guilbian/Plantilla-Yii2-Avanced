<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property integer $id
 * @property string $nombre_rol
 *
 * @property JuradoElegido[] $juradoElegidos
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_rol'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_rol' => 'Nombre Rol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJuradoElegidos()
    {
        return $this->hasMany(JuradoElegido::className(), ['id_rol' => 'id']);
    }








    
}
