<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `specials_table`.
 */
class m160704_064703_create_specials_table extends Migration
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

        $this->createTable('specials', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'img' => Schema::TYPE_STRING . '(255) NOT NULL',
            'short_description' => Schema::TYPE_STRING . '(255) NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'slug' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'dt_add' => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'dt_update' => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'type' => Schema::TYPE_INTEGER . '(3) NOT NULL'

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('specials');
    }
}
