<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `partners_table`.
 */
class m160706_132723_create_partners_table extends Migration
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

        $this->createTable('partners', [
            'id'          => Schema::TYPE_PK,
            'logo'        => Schema::TYPE_STRING . '(255) NOT NULL',
            'link'       => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('partners');
    }
}
