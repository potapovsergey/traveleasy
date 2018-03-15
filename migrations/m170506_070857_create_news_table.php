<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `news`.
 */
class m170506_070857_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'description' => Schema::TYPE_STRING.'(16000) NOT NULL',
            'image' => Schema::TYPE_STRING.' NOT NULL',
            'create_at' => Schema::TYPE_DATETIME,
            'update_at'=> Schema::TYPE_DATETIME,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
