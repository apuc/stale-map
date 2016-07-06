<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `subscription_table`.
 */
class m160706_064614_create_subscription_table extends Migration
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

        $this->createTable('subscription', [
            'id'          => Schema::TYPE_PK,
            'name'        => Schema::TYPE_STRING . '(255) NOT NULL',
            'email'       => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('subscription');
    }
}
