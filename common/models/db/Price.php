<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property integer $price
 * @property string $price_description
 * @property string $description
 * @property string $value
 */
class Price extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img', 'price', 'value'], 'required'],
            [['price'], 'integer'],
            [['name', 'img', 'price_description', 'description', 'value'], 'string', 'max' => 255],
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
            'price' => 'Price',
            'price_description' => 'Price Description',
            'description' => 'Description',
            'value' => 'Value',
        ];
    }
}
