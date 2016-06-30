<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `teble_contact_phone`.
 */
class m160630_105753_create_teble_contact_phone extends Migration
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

        $this->createTable('contact_phone', [
            'id' => Schema::TYPE_PK,
            'phone' => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_phone');
    }
}
