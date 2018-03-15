<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $create_at
 * @property string $update_at
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
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
            [['title', 'description'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 16000],
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
            'image' => 'Картинка',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
