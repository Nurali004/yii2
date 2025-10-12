<?php

use yii\db\Migration;

class m250930_171043_add_foreign_key_to_student_course_course_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk_student_course_student_course_id',
            '{{%student_course}}',
            'course_id',
            '{{%course}}',
            'id',
            'CASCADE',
            'CASCADE'

        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_student_course_student_course_id', '{{%student_course}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250930_171043_add_foreign_key_to_student_course_course_id cannot be reverted.\n";

        return false;
    }
    */
}
