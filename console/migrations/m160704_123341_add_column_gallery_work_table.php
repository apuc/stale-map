<?php

use yii\db\Migration;

class m160704_123341_add_column_gallery_work_table extends Migration
{
    public function up()
    {
        $this->addColumn('gallery_work', 'link_video', \yii\db\Schema::TYPE_STRING . '(255) DEFAULT NULL');
    }

    public function down()
    {
        $this->dropColumn('gallery_work', 'link_video');
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
