<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student_course}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%course}}`
 */
class m250930_163422_create_student_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student_course}}', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer()->notNull(),
            'course_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `student_id`
        $this->createIndex(
            '{{%idx-student_course-student_id}}',
            '{{%student_course}}',
            'student_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-student_course-student_id}}',
            '{{%student_course}}',
            'student_id',
            '{{%student}}',
            'id',
            'CASCADE'
        );

        // creates index for column `course_id`
        $this->createIndex(
            '{{%idx-student_course-course_id}}',
            '{{%student_course}}',
            'course_id'
        );

        // add foreign key for table `{{%course}}`
        $this->addForeignKey(
            '{{%fk-student_course-course_id}}',
            '{{%student_course}}',
            'course_id',
            '{{%course}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-student_course-student_id}}',
            '{{%student_course}}'
        );

        // drops index for column `student_id`
        $this->dropIndex(
            '{{%idx-student_course-student_id}}',
            '{{%student_course}}'
        );

        // drops foreign key for table `{{%course}}`
        $this->dropForeignKey(
            '{{%fk-student_course-course_id}}',
            '{{%student_course}}'
        );

        // drops index for column `course_id`
        $this->dropIndex(
            '{{%idx-student_course-course_id}}',
            '{{%student_course}}'
        );

        $this->dropTable('{{%student_course}}');
    }
}
