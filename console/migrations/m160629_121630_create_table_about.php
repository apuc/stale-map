<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_about`.
 */
class m160629_121630_create_table_about extends Migration
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

        $this->createTable('about', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'meta_description' => Schema::TYPE_STRING . '(255) NOT NULL',
            'meta_keywords' => Schema::TYPE_STRING . '(255) NOT NULL',
            'short_description' => Schema::TYPE_TEXT . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('about');
    }
}
