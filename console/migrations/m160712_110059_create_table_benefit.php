<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_benefit`.
 */
class m160712_110059_create_table_benefit extends Migration
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

        $this->createTable('benefit', array(
            'id'          => Schema::TYPE_PK,
            'name'        => Schema::TYPE_STRING . '(255) NOT NULL',
            'img'         => Schema::TYPE_STRING . '(255) NOT NULL',

        ), $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('benefit');
    }
}
