<?php

use yii\db\Migration;
use yii\db\Schema;

class m170506_074346_add_type_id_in_tour_table extends Migration
{




    public function safeUp()
    {
        $this->addColumn('tour','type_id',Schema::TYPE_INTEGER);
        $this->addForeignKey('type_tour_id','tour','type_id','type_tour','id','cascade','cascade');
    }

    public function safeDown()
    {
        $this->dropForeignKey('type_tour_id','tour');
        $this->dropColumn('tour','type_id');
    }

}
