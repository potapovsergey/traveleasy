<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `type_travel`.
 */
class m170504_102656_create_type_travel_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('type_travel', [
            'id' => Schema::TYPE_PK.' NOT NULL AUTO_INCREMENT',
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'image' => Schema::TYPE_STRING
        ]);
        $this->addForeignKey('type_travel_tours', 'type_travel', 'id', 'tours', 'type_id', 'cascade', 'cascade');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey('type_travel_tours', 'type_travel');
        $this->dropTable('type_travel');
    }
}
