<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `tours`.
 */
class m170504_102527_create_tours_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tours', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING.' NOT NULL',
            'country_id' => Schema::TYPE_INTEGER,
            'type_id' => Schema:: TYPE_INTEGER,
            'price' => Schema::TYPE_DECIMAL.' NOT NULL',
            'description' => Schema::TYPE_STRING.'(4096) NOT NULL',
            'created_at' => Schema::TYPE_INTEGER,
            'image' => Schema::TYPE_STRING
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tours');
    }
}
