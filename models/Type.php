<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "types".
 *
 * @property int $id_type
 * @property string $name
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_type' => 'Id Type',
            'name' => 'Name',
        ];
    }
}
