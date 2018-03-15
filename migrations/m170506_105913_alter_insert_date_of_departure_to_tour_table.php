<?php

use yii\db\Migration;
use yii\db\Schema;

class m170506_105913_alter_insert_date_of_departure_to_tour_table extends Migration
{
    public function up()
    {
        $this->alterColumn('tour','date_of_departure',Schema::TYPE_STRING);
    }

    public function down()
    {

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
