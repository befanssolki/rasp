<?php

use yii\db\Migration;

/**
 * Class m190404_055905_group
 */
class m190404_055905_group extends Migration
{
    /**
     * {@inheritdoc}
     */
   /* public function safeUp()
    {

    }

    /**
     * {@inheritdoc}

    public function safeDown()
    {
        echo "m190404_055905_group cannot be reverted.\n";

        return false;
    }*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%group}}', [
            'id_group' => $this->primaryKey(),
            'number' => $this->string(50)->notNull()->unique(),
            'spec' => $this->string(50)->notNull(),
            'count_student' => $this->integer()->notNull(),
            'kurs' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%group}}');
        return false;
    }

}
