<?php

use yii\db\Migration;

class m250930_164947_add_unique_index_on_student_email extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'student_index',
            '{{%student}}',
            'email',
            true

        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropIndex(
           'student_index',
           '{{%student}}'

       );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250930_164947_add_unique_index_on_student_email cannot be reverted.\n";

        return false;
    }
    */
}
