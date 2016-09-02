<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_services_img`.
 */
class m160712_115017_create_table_services_img extends Migration
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

        $this->createTable('services_img', array(
            'id'          => Schema::TYPE_PK,
            'services_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'img'         => Schema::TYPE_STRING . '(255) NOT NULL',

        ), $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('services_img');
    }
}
