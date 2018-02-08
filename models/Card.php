<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cards".
 *
 * @property int $id_card
 * @property string $name
 * @property string $fid_set
 * @property int $crafting_cost
 * @property int $fid_type
 * @property int $fid_rarity
 * @property string $img
 */
class Card extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cards';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'fid_set', 'fid_type'], 'required'],
            [['crafting_cost', 'fid_type', 'fid_rarity'], 'integer'],
            [['name', 'fid_set', 'img'], 'string', 'max' => 255],
            [['file'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_card' => 'Id Card',
            'name' => 'Name',
            'fid_set' => 'Fid Set',
            'crafting_cost' => 'Crafting Cost',
            'fid_type' => 'Fid Type',
            'fid_rarity' => 'Fid Rarity',
            'img' => 'Img',
        ];
    }

    public function getRarity()
    {
        return $this->hasOne(Rarity::className(), ['id' => 'fid_rarity']);
    }

    public function getSet()
    {
        return $this->hasOne(Set::className(), ['id' => 'fid_set']);
    }

    public function getType()
    {
        return $this->hasOne(Type::className(), ['id_type' => 'fid_type']);
    }
}
