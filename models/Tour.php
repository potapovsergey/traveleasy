<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tour".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $price
 * @property string $date_of_departure
 * @property string $image
 * @property integer $type_id
 * @property integer $country_id
 * @property integer $min_price
 * @property integer $max_price
 * @property Country $country
 * @property TypeTour $type
 * @property UserProfile[] $userProfiles
 */
class Tour extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tour';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    public function rules()
    {
        return [
            [['title', 'description', 'price'], 'required'],
            [['price'], 'number'],
            [['date_of_departure'], 'safe'],
            [['type_id', 'country_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 11000],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeTour::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'price' => 'Цена',
            'date_of_departure' => 'Date Of Departure',
            'image' => 'Картинка',
            'type_id' => 'Тип тура',
            'country_id' => 'Страна',
            'min_price'=>'Цена от:',
            'max_price'=>'До:',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(TypeTour::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfiles()
    {
        return $this->hasMany(UserProfile::className(), ['tour_id' => 'id']);
    }
}
