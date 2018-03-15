<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `type_tour`.
 */
class m170506_070831_create_type_tour_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('type_tour', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'image' => Schema::TYPE_STRING,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('type_tour');
    }
}
