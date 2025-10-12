<?php

use yii\db\Migration;
use yii\db\Schema;

class m250930_054900_add_status_to_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('video', 'status', Schema::TYPE_STRING.' NOT NULL');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('video', 'status');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250930_054900_add_status_to_video_table cannot be reverted.\n";

        return false;
    }
    */
}
