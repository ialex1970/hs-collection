<?php

use yii\db\Migration;

/**
 * Class m180208_114032_fill_rarity_table
 */
class m180208_114032_fill_rarity_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('rarity', [
            'name' => 'Обычная'
        ]);
        $this->insert('rarity', [
            'name' => 'Редкая'
        ]);
        $this->insert('rarity', [
            'name' => 'Эпическая'
        ]);
        $this->insert('rarity', [
            'name' => 'Легендарная'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180208_114032_fill_rariry_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180208_114032_fill_rariry_table cannot be reverted.\n";

        return false;
    }
    */
}
