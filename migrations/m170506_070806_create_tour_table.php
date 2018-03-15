<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `tour`.
 */
class m170506_070806_create_tour_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tour', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'description' => Schema::TYPE_STRING.'(16000) NOT NULL',
            'price' => Schema::TYPE_DECIMAL.' NOT NULL',
            'date_of_departure' => Schema::TYPE_DATE.' NOT NULL',
            'image' => Schema::TYPE_STRING,
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tour');
    }
}
