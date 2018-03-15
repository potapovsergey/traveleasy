<?php

use yii\db\Migration;
use yii\db\Schema;

class m170506_103355_alter_insert_birth_date_to_user_profile_table extends Migration
{
    public function up()
    {
            $this->alterColumn('user_profile','birth_date',Schema::TYPE_STRING);
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
