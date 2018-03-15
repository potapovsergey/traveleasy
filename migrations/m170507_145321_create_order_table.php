<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `order`.
 */
class m170507_145321_create_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('order', [
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING.' NOT NULL',
            'second_name' => Schema::TYPE_STRING.' NOT NULL',
            'middle_name' => Schema::TYPE_STRING.' NOT NULL',
            'passport_ser' => Schema::TYPE_STRING.' NOT NULL',
            'passport_num' => Schema::TYPE_INTEGER.' NOT NULL',
            'address' => Schema::TYPE_STRING.' NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('order');
    }
}
