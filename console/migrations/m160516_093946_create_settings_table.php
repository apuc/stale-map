<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `settings_table`.
 */
class m160516_093946_create_settings_table extends Migration
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

        $this->createTable('settings', [
            'id' => Schema::TYPE_PK,
            'key' => Schema::TYPE_STRING. '(255) NOT NULL',
            'value' => Schema::TYPE_STRING. '(255) NOT NULL',

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('settings');
    }
}
