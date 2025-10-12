<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 */
class m250930_052543_create_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'thumbnail' => $this->string()->notNull(),
            'duration' => $this->integer()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%video}}');
    }
}
