<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `blog_table`.
 */
class m160527_101511_create_blog_table extends Migration
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

        $this->createTable('blog', [
            'id' => Schema::TYPE_PK,
            'dt_add' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'dt_update' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'short_description' => Schema::TYPE_STRING . '(255) NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'images' => Schema::TYPE_STRING . '(255) default NULL',
            'meta_description' => $this->string([255])->defaultValue(null),
            'meta_keywords' => $this->string([255])->defaultValue(null),
            'slug' => Schema::TYPE_STRING . '(255) NOT NULL',

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('blog');
    }
}
