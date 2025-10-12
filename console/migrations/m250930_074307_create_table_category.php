<?php

use yii\db\Migration;

class m250930_074307_create_table_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('category', [
             'id' => $this->primaryKey(),
             'title' => $this->string()->notNull(),
             'created_at' => $this->date()->notNull(),
         ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250930_074307_create_table_category cannot be reverted.\n";

        return false;
    }
    */
}
