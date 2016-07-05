<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `franchise_table`.
 */
class m160701_073513_create_franchise_table extends Migration
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

        $this->createTable('franchise', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'text' => Schema::TYPE_TEXT . ' NOT NULL',
            'meta_description' => Schema::TYPE_STRING . '(255) NOT NULL',
            'meta_keywords' => Schema::TYPE_STRING . '(255) DEFAULT NULL'
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('franchise');
    }
}
