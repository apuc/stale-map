<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_reviews`.
 */
class m160628_085935_create_table_reviews extends Migration
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

        $this->createTable('reviews', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'img' => Schema::TYPE_STRING . '(255) NOT NULL',
            'text' => Schema::TYPE_STRING . '(255) NOT NULL',
            'rating' => Schema::TYPE_INTEGER . '(5) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('reviews');
    }
}
