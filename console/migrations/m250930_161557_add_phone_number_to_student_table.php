<?php

use yii\db\Migration;

class m250930_161557_add_phone_number_to_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('student', 'phone_number', $this->string(15)->Null());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('student', 'phone_number');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250930_161557_add_phone_number_to_student_table cannot be reverted.\n";

        return false;
    }
    */
}
