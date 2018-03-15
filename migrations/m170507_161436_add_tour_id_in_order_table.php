<?php

use yii\db\Migration;
use yii\db\Schema;

class m170507_161436_add_tour_id_in_order_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('order','tour_id',Schema::TYPE_INTEGER);
        $this->addForeignKey('order_tour_id','order','tour_id','tour','id','cascade','cascade');
    }

    public function safeDown()
    {
        $this->dropForeignKey('order_tour_id','order');
        $this->dropColumn('order','tour_id');
    }
}
