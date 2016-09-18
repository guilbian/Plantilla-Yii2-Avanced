<?php

namespace backend\models;

use Yii;

use common\models\User;

/**
 * This is the model class for table "roles".
 *
 * @property integer $id
 * @property string $roles
 *
 * @property User[] $users
 */
class Roles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roles'], 'required'],
            [['roles'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roles' => 'Roles',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id_rol' => 'id']);
    }

  







}
