<?php

use yii\db\Migration;

/**
 * Class m180208_114607_add_column_to_cards_table
 */
class m180208_114607_add_column_to_cards_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('cards', 'img', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180208_114607_add_column_to_cards_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180208_114607_add_column_to_cards_table cannot be reverted.\n";

        return false;
    }
    */
}
