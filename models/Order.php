<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $second_name
 * @property string $middle_name
 * @property string $passport_ser
 * @property integer $passport_num
 * @property string $address
 * @property integer $order_user
 * @property integer $tour_id
 *
 * @property Tour $tour
 * @property UserProfile $orderUser
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'second_name', 'middle_name', 'passport_ser', 'passport_num', 'address'], 'required'],
            [['passport_num', 'order_user', 'tour_id'], 'integer'],
            [['first_name', 'second_name', 'middle_name', 'passport_ser', 'address'], 'string', 'max' => 255],
            [['tour_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['tour_id' => 'id']],
            [['order_user'], 'exist', 'skipOnError' => true, 'targetClass' => UserProfile::className(), 'targetAttribute' => ['order_user' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Имя',
            'second_name' => 'Фамилия',
            'middle_name' => 'Отчество',
            'passport_ser' => 'Серия пасспорта',
            'passport_num' => 'Номер пасспорта',
            'address' => 'Адресс',
            'order_user' => 'Order User',
            'tour_id' => 'Tour ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['id' => 'tour_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderUser()
    {
        return $this->hasOne(UserProfile::className(), ['user_id' => 'order_user']);
    }
    public function order($id)
    {
        $order = new Order();
        $order->first_name = $this->first_name;
        $order->second_name = $this->second_name;
        $order->middle_name = $this->middle_name;
        $order->passport_ser = $this->passport_ser;
        $order->passport_num = $this->passport_num;
        $order->address = $this->address;
        $order->tour_id = $id;
        return $order->save() ? $order : null;
    }

}
