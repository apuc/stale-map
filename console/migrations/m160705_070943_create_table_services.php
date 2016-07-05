<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_services`.
 */
class m160705_070943_create_table_services extends Migration
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

        $this->createTable('services', [
            'id'                => Schema::TYPE_PK,
            'title'             => Schema::TYPE_STRING . '(255) NOT NULL',
            'img'               => Schema::TYPE_STRING . '(255) NOT NULL',
            'icon'              => Schema::TYPE_STRING . '(255) NOT NULL',
            'description'       => Schema::TYPE_TEXT . ' NOT NULL',
            'slug'              => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'dt_add'            => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'dt_update'         => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'meta_description'  => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'meta_keywords'     => Schema::TYPE_STRING . '(255) DEFAULT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('services');
    }
}
