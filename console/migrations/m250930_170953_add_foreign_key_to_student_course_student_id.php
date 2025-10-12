<?php

use yii\db\Migration;

class m250930_170953_add_foreign_key_to_student_course_student_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk_student_course_student_id',
            '{{%student_course}}',
            'student_id',
            '{{%student}}',
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
        $this->dropForeignKey('fk_student_course_student_id', '{{%student_course}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250930_170953_add_foreign_key_to_student_course_student_id cannot be reverted.\n";

        return false;
    }
    */
}
