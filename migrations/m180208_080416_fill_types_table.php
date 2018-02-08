<?php

use yii\db\Migration;

/**
 * Class m180208_080416_fill_types_table
 */
class m180208_080416_fill_types_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('types', [
            'name' => 'Друид'
        ]);
        $this->insert('types', [
            'name' => 'Охотник'
        ]);
        $this->insert('types', [
            'name' => 'Маг'
        ]);
        $this->insert('types', [
            'name' => 'Палладин'
        ]);
        $this->insert('types', [
            'name' => 'Жрец'
        ]);
        $this->insert('types', [
            'name' => 'Разбойник'
        ]);
        $this->insert('types', [
            'name' => 'Шаман'
        ]);
        $this->insert('types', [
            'name' => 'Чернокнижник'
        ]);
        $this->insert('types', [
            'name' => 'Воин'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180208_080416_fill_types_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180208_080416_fill_types_table cannot be reverted.\n";

        return false;
    }
    */
}
