<?php

use yii\db\Migration;

/**
 * Class m190405_174010_audit
 */
class m190405_174010_audit extends Migration
{
    /**
     * {@inheritdoc}
     */
    /*public function safeUp()
    {

    }

    /**
     * {@inheritdoc}

    public function safeDown()
    {
        echo "m190405_174010_audit cannot be reverted.\n";

        return false;
    }*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('audit', [
            'id_audit' => $this->primaryKey(),
            'number_audit' => $this->integer()->notNull()->unique(),
            'name_audit' => $this->string(50)->notNull(),
            'count_place' => $this->integer()->notNull(),
            'type_audit' => $this->string(35)->notNull(),
            'number_korpus' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('audit');

        return false;
    }

}
