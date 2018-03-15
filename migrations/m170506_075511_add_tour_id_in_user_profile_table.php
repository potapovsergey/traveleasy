<?php

use yii\db\Migration;
use yii\db\Schema;

class m170506_075511_add_tour_id_in_user_profile_table extends Migration
{

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->addColumn('user_profile','tour_id',Schema::TYPE_INTEGER);
        $this->addForeignKey('user_profile_tour','user_profile','tour_id','tour','id','cascade','cascade');
    }

    public function safeDown()
    {
        $this->dropForeignKey('user_profile_tour','user_profile');
        $this->dropColumn('user_profile','tour_id');
    }

}
