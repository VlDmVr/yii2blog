<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m180622_093446_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'article_id' => $this->integer(),
            'status' => $this->integer(),
        ]);
        
        //crestes index for column `user_id`
        $this->createIndex(
                'idx-comment-user_id',
                'comment',
                'user_id'
        );
        
        //add foreign key for table `user`
        $this->addForeignKey(
                'fk-comment-user_id',
                'comment',
                'user_id',
                'user',
                'id',
                'CASCADE'
        );
        
        //create index for column `article_id`
        $this->createIndex(
                'idx-comment-article_id',
                'comment',
                'article_id'  
        );
        
        //add foreign key for table `article`
        $this->addForeignKey(
                'fk-comment-article_id',
                'comment',
                'article_id',
                'article',
                'id',
                'CASCADE'
        );
    }
    
    

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }
}
