<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%library}}`.
 */
class m251011_144257_create_library_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%library}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'created_at' => $this->dateTime()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%library}}');
    }
}
