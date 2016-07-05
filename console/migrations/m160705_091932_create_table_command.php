<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_command`.
 */
class m160705_091932_create_table_command extends Migration
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

        $this->createTable('command', [
            'id'                => Schema::TYPE_PK,
            'title'             => Schema::TYPE_STRING . '(255) NOT NULL',
            'position'          => Schema::TYPE_STRING . '(255) NOT NULL',
            'photo'             => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('command');
    }
}
