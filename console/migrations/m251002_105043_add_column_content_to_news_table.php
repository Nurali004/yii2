<?php

use yii\db\Migration;

class m251002_105043_add_column_content_to_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%news}}', 'content', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('{{%news}}', 'content');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251002_105043_add_column_content_to_news_table cannot be reverted.\n";

        return false;
    }
    */
}
