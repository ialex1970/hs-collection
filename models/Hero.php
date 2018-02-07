<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "heroes".
 *
 * @property int $id_class
 * @property string $name
 * @property string $picture
 */
class Hero extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'heroes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'picture'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_class' => 'Id Class',
            'name' => 'Name',
            'picture' => 'Picture',
        ];
    }
}
