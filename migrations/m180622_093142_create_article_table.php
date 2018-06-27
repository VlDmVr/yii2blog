<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m180622_093142_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'content' => $this->text(),
            'date' => $this->date(),
            'image' => $this->string(),
            'viewed' => $this->integer(),
            'user_id' => $this->integer(),
            'status' => $this->integer(),
            'category_id' => $this->integer()                
        ]);
        
        //create index for column `user_id`
        $this->createIndex(
                'idx-article-user_id',
                'article',
                'user_id'
        );
        // add foreign key for table `user`
            $this->addForeignKey(
                 'fk-article-user_id',
                 'article',
                 'user_id',
                 'user',
                 'id',
                 'CASCADE'
        );
        //create index for column `category_id`
        $this->createIndex(
                'idx-article-category_id',
                'article',
                'category_id'
        );
        // add foreign key for table `category`
        $this->addForeignKey(
               'fk-article-category_id',
                'article',
                'category_id',
                'category',
                'id',
                'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article');
    }
}
