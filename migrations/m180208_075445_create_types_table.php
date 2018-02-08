<?php

use yii\db\Migration;

/**
 * Handles the creation of table `types`.
 */
class m180208_075445_create_types_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('types', [
            'id_type' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('types');
    }
}
