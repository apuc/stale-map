<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `teble_gallery_work_img`.
 */
class m160628_113739_create_teble_gallery_work_img extends Migration
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

        $this->createTable('gallery_work_img', [
            'id' => Schema::TYPE_PK,
            'work_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'img' => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('gallery_work_img');
    }
}
