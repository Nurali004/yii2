<?php

use yii\db\Migration;

class m250930_152938_insert_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%category}}', ['title', 'created_at'],
            [
                ['Yangilik', '2025-09-30'],
                ['Jahon yangilik', '2025-09-30'],
                ['Mahalliy yangilik', '2025-09-30'],
                ['IT yangilik', '2025-09-30']
            ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250930_152938_insert_categories cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250930_152938_insert_categories cannot be reverted.\n";

        return false;
    }
    */
}
