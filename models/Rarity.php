<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rarity".
 *
 * @property int $id
 * @property int $name
 */
class Rarity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rarity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
