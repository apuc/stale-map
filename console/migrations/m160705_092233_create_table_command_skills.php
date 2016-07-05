<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_command_skills`.
 */
class m160705_092233_create_table_command_skills extends Migration
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

        $this->createTable('command_skills', [
            'id'                => Schema::TYPE_PK,
            'command_id'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'skills_id'         => Schema::TYPE_INTEGER . '(11) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('command_skills');
    }
}
