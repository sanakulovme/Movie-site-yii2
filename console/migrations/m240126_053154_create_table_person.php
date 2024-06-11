<?php

use yii\db\Migration;

/**
 * Class m240126_053154_create_table_person
 */
class m240126_053154_create_table_person extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('person', [
            'id' => $this->primaryKey(),
            'first_name'=>$this->string(30)->notNull(),
            'last_name' =>$this->string(30)->notNull(),
            'email' =>$this->string(30)->notNull(),
            'gender' =>$this->string(10)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
        // $this->dropTable("person");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240126_053154_create_table_person cannot be reverted.\n";

        return false;
    }
    */
}
