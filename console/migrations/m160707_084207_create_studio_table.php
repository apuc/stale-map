<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `studio_table`.
 */
class m160707_084207_create_studio_table extends Migration
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

        $this->createTable('studio', [
            'id'          => Schema::TYPE_PK,
            'name'        => Schema::TYPE_STRING . '(255) NOT NULL',
            'city_id'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'address'       => Schema::TYPE_STRING . '(255) NOT NULL',
            'address_dop'       => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'phone'       => Schema::TYPE_STRING . '(255) NOT NULL',
            'slug'       => Schema::TYPE_STRING . '(255) NOT NULL',
            'description'       => Schema::TYPE_TEXT . ' NOT NULL',
            'meta_keyword'       => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'meta_description'       => Schema::TYPE_STRING . '(255) DEFAULT NULL',

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('studio');
    }
}
