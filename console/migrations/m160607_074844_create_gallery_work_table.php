<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `gallery_work_table`.
 */
class m160607_074844_create_gallery_work_table extends Migration
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

        $this->createTable('gallery_work', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'short_description' => Schema::TYPE_STRING . '(255) NOT NULL',
            'thumb' => Schema::TYPE_STRING . '(255) NOT NULL',
            'slug' => Schema::TYPE_STRING . '(255) NOT NULL',
            'meta_description' => Schema::TYPE_STRING . '(255) NOT NULL',
            'meta_keywords' => Schema::TYPE_STRING . '(255) NOT NULL',
            'dt_add' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'dt_update' => Schema::TYPE_INTEGER . '(11) NOT NULL',

        ], $tableOptions);


    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropTable('gallery_work');
    }
}
