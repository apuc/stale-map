<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `gallery_category_table`.
 */
class m160607_074621_create_gallery_category_table extends Migration
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

        $this->createTable('gallery_category', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('gallery_category');
    }
}
