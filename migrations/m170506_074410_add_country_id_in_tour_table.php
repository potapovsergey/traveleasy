<?php

use yii\db\Migration;
use yii\db\Schema;

class m170506_074410_add_country_id_in_tour_table extends Migration
{


    public function safeUp()
    {
        $this->addColumn('tour','country_id',Schema::TYPE_INTEGER);
        $this->addForeignKey('country_tour_id','tour','country_id','country','id','cascade','cascade');
    }


    public function safeDown()
    {
        $this->dropForeignKey('country_tour_id','tour');
        $this->dropColumn('tour','country_id');
    }

}
