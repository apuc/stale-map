<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_benefit_services`.
 */
class m160712_111655_create_table_benefit_services extends Migration
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

        $this->createTable('benefit_services', array(
            'id'          => Schema::TYPE_PK,
            'servises_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'benefit_id'  => Schema::TYPE_INTEGER . '(11) NOT NULL',

        ), $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('benefit_services');
    }
}
