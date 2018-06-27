<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article_tag`.
 */
class m180622_093523_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article_tag', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'tag_id' => $this->integer()
        ]);
        //create index for column `article_id`
        $this->createIndex(
                'idx-article-article_id',
                'article_tag',
                'article_id'
        );
        
        //add foriegn key for teble article
        $this->addForeignKey(
                'fk-article-article_id',
                'article_tag',
                'article_id',
                'article',
                'id',
                'CASCADE'
        );
        
        //create index for column `tag_id`
        $this->createIndex(
            'idx-tag-tag_id',
            'article_tag',
            'tag_id'   
        );
        
        //add foriegn key for teble tag
        $this->addForeignKey(
                'fk-tag-tag_id',
                'article_tag',
                'tag_id',
                'tag',
                'id',
                'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article_tag');
    }
}
