<?php

use yii\db\Migration;

/**
 * Class m220317_153605_crear_nueva_columna
 */
class m220317_153605_crear_nueva_columna extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    	$this->addColumn('carrera', 'sigla', $this->string(5));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220317_153605_crear_nueva_columna cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220317_153605_crear_nueva_columna cannot be reverted.\n";

        return false;
    }
    */
}
