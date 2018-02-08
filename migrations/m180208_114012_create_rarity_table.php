<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rarity`.
 */
class m180208_114012_create_rarity_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('rarity', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('rarity');
    }
}
