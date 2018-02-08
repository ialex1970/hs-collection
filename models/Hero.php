<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "heroes".
 *
 * @property int $id_hero
 * @property string $name
 * @property string $img
 * @property int fid_type
 */
class Hero extends \yii\db\ActiveRecord
{
    public $file;
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
            [['name', 'fid_type'], 'required'],
            [['name', 'img'], 'string', 'max' => 255],
            [['fid_type'], 'integer'],
            [['file'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hero' => 'Id Class',
            'name' => 'Name',
            'img' => 'Image',
        ];
    }

    public function getType()
    {
        return $this->hasOne(Type::className(), ['id_type' => 'fid_type']);
    }
}
