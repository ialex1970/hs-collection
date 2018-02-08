<?php

use yii\db\Migration;

/**
 * Class m180207_133122_create_table_d_classes
 */
class m180207_133122_create_table_heroes extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('heroes', [
            'id_hero' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'img' => $this->string()->null(),
            'fid_type' => $this->integer()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('heroes');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180207_133122_create_table_d_classes cannot be reverted.\n";

        return false;
    }
    */
}
