<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `about_photo`.
 */
class m160629_121953_create_about_photo extends Migration
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

        $this->createTable('about_photo', [
            'id' => Schema::TYPE_PK,
            'img' => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('about_photo');
    }
}
