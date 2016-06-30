<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `teble_contact_page_table`.
 */
class m160630_105729_create_teble_contact_page_table extends Migration
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

        $this->createTable('contact_page', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'meta_description' => Schema::TYPE_STRING . '(255) NOT NULL',
            'meta_keywords' => Schema::TYPE_STRING . '(255) NOT NULL',
            'address' => Schema::TYPE_STRING . '(255) NOT NULL',
            'whats_app' => Schema::TYPE_STRING . '(255) NOT NULL',
            'email' => Schema::TYPE_STRING . '(255) NOT NULL',
            'link_vk' => Schema::TYPE_STRING . '(255) NOT NULL',
            'link_fb' => Schema::TYPE_STRING . '(255) NOT NULL',
            'link_inst' => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_page');
    }
}
