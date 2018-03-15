<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `user_profile`.
 */
class m170506_070628_create_user_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('user_profile', [
            'user_id' => Schema::TYPE_PK ,
            'first_name' => Schema::TYPE_STRING.' NOT NULL',
            'second_name' => Schema::TYPE_STRING.' NOT NULL',
            'middle_name' => Schema::TYPE_STRING.' NOT NULL',
            'birth_date' => Schema::TYPE_DATE.' NOT NULL',
            'passport_ser' => Schema::TYPE_STRING.' NOT NULL',
            'passport_num' => Schema::TYPE_INTEGER.' NOT NULL',
            'address' => Schema::TYPE_STRING.' NOT NULL',
        ]);
        $this->addForeignKey('user_profile_user', 'user_profile','user_id','user','id','cascade','cascade');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey('user_profile_user','user_profile');
        $this->dropTable('user_profile');
    }
}
