<?php

use yii\db\Migration;

/**
 * Class m191205_171837_create_table_country
 */
class m191205_171837_create_table_country extends Migration
{

    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $this->createTable('country',[
            'id'            => $this->primaryKey()->unsigned(),
            'code'          => $this->string(2)->unique(),
            'name'          => $this->string(80),
            'phonecode'     => $this->ineger(5),
            'lat'          => $this->string(45)->notNull(),
            'lng'          => $this->string(45)->notNull()
        ]);

        $this->insert('country',[
            'code' =>  'DE',
            'name' => 'Alemanha',
            'phoncecode' => '49',
            'lat'  => '111111',
            'lng'  => '222222'
        ]);
    }

    /**
     * {@inheritdoc}
     */

    public function safeDown()
    {
        $this->delete('country',['code' => 'DE']);
        $this->dropTable('country');        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191205_171837_create_table_country cannot be reverted.\n";

        return false;
    }

    public function up()
    {

    }

    */
}
