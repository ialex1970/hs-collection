<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cards`.
 */
class m180208_113436_create_cards_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cards', [
            'id_card' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'fid_set' => $this->string()->notNull(),
            'crafting_cost' => $this->integer()->null(),
            'fid_type' => $this->integer()->notNull(),
            'fid_rarity' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cards');
    }
}
