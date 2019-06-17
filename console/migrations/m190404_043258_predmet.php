<?php

use yii\db\Migration;

/**
 * Class m190404_043258_predmet
 */
class m190404_043258_predmet extends Migration
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
        echo "m190404_043258_predmet cannot be reverted.\n";

        return false;
    }*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%predmet}}', [
            'id_predmet' => $this->primaryKey(),
            'name_predmet' => $this->string()->notNull()->unique(),
            'id_prepod' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%predmet}}');
        return false;
    }

}
