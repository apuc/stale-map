<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `diplom_table`.
 */
class m160630_085950_create_diplom_table extends Migration
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

        $this->createTable('diplom', [
            'id' => Schema::TYPE_PK,
            'img' => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('diplom');
    }
}
