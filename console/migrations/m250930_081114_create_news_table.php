<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%category}}`
 */
class m250930_081114_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'author' => $this->integer(),
            'title' => $this->string(100)->notNull(),
            'category_id' => $this->integer(),
            'created_at' => $this->date(),
        ]);

        // creates index for column `author`
        $this->createIndex(
            '{{%idx-news-author}}',
            '{{%news}}',
            'author'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-news-author}}',
            '{{%news}}',
            'author',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-news-category_id}}',
            '{{%news}}',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-news-category_id}}',
            '{{%news}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-news-author}}',
            '{{%news}}'
        );

        // drops index for column `author`
        $this->dropIndex(
            '{{%idx-news-author}}',
            '{{%news}}'
        );

        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-news-category_id}}',
            '{{%news}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-news-category_id}}',
            '{{%news}}'
        );

        $this->dropTable('{{%news}}');
    }
}
