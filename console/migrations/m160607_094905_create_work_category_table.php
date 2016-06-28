<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `work_category_table`.
 */
class m160607_094905_create_work_category_table extends Migration
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

        $this->createTable('work_category', [
            'id' => Schema::TYPE_PK,
            'category_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'work_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
        ], $tableOptions);


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('work_category');
    }
}
