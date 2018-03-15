<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property integer $user_id
 * @property string $first_name
 * @property string $second_name
 * @property string $middle_name
 * @property string $birth_date
 * @property string $passport_ser
 * @property integer $passport_num
 * @property string $address
 * @property integer $tour_id
 * @property integer $id_user
 *
 * @property Tour $tour
 * @property User $user
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'second_name', 'middle_name', 'passport_ser', 'passport_num', 'address'], 'required'],
            [['birth_date'], 'safe'],
            [['passport_num', 'tour_id','id_user'], 'integer'],
            [['first_name', 'second_name', 'middle_name', 'passport_ser', 'address'], 'string', 'max' => 255],
            [['tour_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['tour_id' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'first_name' => 'Имя',
            'second_name' => 'Фамилия',
            'middle_name' => 'Отчество',
            'birth_date' => 'Дата рождения',
            'passport_ser' => 'Серия паспорта',
            'passport_num' => 'Номер паспорта',
            'address' => 'Адресс',
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
