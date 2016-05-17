<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `template_table`.
 */
class m160516_122130_create_template_table extends Migration
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

        $this->createTable('template', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING. '(255) NOT NULL',
            'tpl' => Schema::TYPE_TEXT,

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('template');
    }
}
