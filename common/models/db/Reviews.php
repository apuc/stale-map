<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $text
 * @property integer $rating
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img', 'text', 'rating'], 'required'],
            [['rating'], 'integer'],
            [['name', 'img', 'text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img' => 'Img',
            'text' => 'Text',
            'rating' => 'Rating',
        ];
    }
}
