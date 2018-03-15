<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `country`.
 */
class m170504_102618_create_country_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'image' => Schema::TYPE_STRING
        ]);
        $this->createIndex('country','{{%tours}}','country', true);
        $this->addForeignKey('country_tours', 'country', 'id', 'tours', 'country_id', 'cascade', 'cascade');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey('country_tours', 'country');
        $this->dropTable('country');
    }
}
