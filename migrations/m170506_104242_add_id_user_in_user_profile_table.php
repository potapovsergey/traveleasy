<?php

use yii\db\Migration;
use yii\db\Schema;

class m170506_104242_add_id_user_in_user_profile_table extends Migration
{

    public function safeUp()
    {
        $this->addColumn('user_profile','id_user',Schema::TYPE_INTEGER);
        $this->addForeignKey('user_profile_id_user','user_profile','id_user','user','id','cascade','cascade');
    }

    public function safeDown()
    {
        $this->dropForeignKey('user_profile_id_user','user_profile');
        $this->dropColumn('user_profile','id_user');
    }

}
