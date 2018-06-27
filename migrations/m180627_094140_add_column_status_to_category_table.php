<?php

use yii\db\Migration;

/**
 * Class m180627_094140_add_column_status_to_category_table
 */
class m180627_094140_add_column_status_to_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category', 'status', 'integer');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180627_094140_add_column_status_to_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180627_094140_add_column_status_to_category_table cannot be reverted.\n";

        return false;
    }
    */
}
