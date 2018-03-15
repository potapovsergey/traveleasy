<?php

use yii\db\Migration;
use yii\db\Schema;

class m170507_150143_add_order_user_in_order_table extends Migration
{



    public function safeUp()
    {
        $this->addColumn('order','order_user',Schema::TYPE_INTEGER);
        $this->addForeignKey('order_user_profile','order','order_user','user_profile','user_id','cascade','cascade');
    }

    public function safeDown()
    {
        $this->dropForeignKey('order_user_profile','order');
        $this->dropColumn('order','order_user');
    }

}
