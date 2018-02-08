<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sets`.
 */
class m180208_115247_create_sets_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sets', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sets');
    }
}
