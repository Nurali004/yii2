<?php

use yii\db\Migration;

class m250930_164351_add_index_course_title_index_on_course_title extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'course_title_index',
            '{{%course}}',
            'title'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex(
            'course_title_index',
            '{{%course}}'

        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250930_164351_add_index_course_title_index_on_course_title cannot be reverted.\n";

        return false;
    }
    */
}
