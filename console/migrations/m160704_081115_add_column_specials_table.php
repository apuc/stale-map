<?php

use yii\db\Migration;

class m160704_081115_add_column_specials_table extends Migration
{
    public function up()
    {
        $this->addColumn('specials', 'meta_keywords', \yii\db\Schema::TYPE_STRING . '(255) DEFAULT NULL');
        $this->addColumn('specials', 'meta_description', \yii\db\Schema::TYPE_STRING . '(255) DEFAULT NULL');
    }

    public function down()
    {
        $this->dropColumn('specials', 'meta_keywords');
        $this->dropColumn('specials', 'meta_description');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
