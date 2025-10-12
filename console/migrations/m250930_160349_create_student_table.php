<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student}}`.
 */
class m250930_160349_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(100)->notNull(),
            'birth_date' => $this->date()->notNull(),
            'email' => $this->string(100)->unique()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student}}');
    }
}
