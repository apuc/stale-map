<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_about_work_id`.
 */
class m160629_122141_create_table_about_work_id extends Migration
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

        $this->createTable('about_work_id', [
            'id' => Schema::TYPE_PK,
            'work_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('about_work_id');
    }
}
