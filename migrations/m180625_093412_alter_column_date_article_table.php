<?php

use yii\db\Migration;

/**
 * Class m180625_093412_alter_column_date_article_table
 */
class m180625_093412_alter_column_date_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('article', 'date', 'dateTime');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180625_093412_alter_column_date_article_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180625_093412_alter_column_date_article_table cannot be reverted.\n";

        return false;
    }
    */
}
