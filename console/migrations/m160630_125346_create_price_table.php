<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `price_table`.
 */
class m160630_125346_create_price_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('price', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'img' => Schema::TYPE_STRING . '(255) NOT NULL',
            'price' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'price_description' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'description' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'value' => Schema::TYPE_STRING . '(255) NOT NULL'
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('price');
    }
}
