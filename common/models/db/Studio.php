<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "studio".
 *
 * @property integer $id
 * @property string $name
 * @property integer $city_id
 * @property string $address
 * @property string $address_dop
 * @property string $phone
 * @property string $slug
 * @property string $description
 * @property string $meta_keyword
 * @property string $meta_description
 */
class Studio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city_id', 'address', 'phone', 'slug', 'description'], 'required'],
            [['city_id'], 'integer'],
            [['description'], 'string'],
            [['name', 'address', 'address_dop', 'phone', 'slug', 'meta_keyword', 'meta_description'], 'string', 'max' => 255],
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
            'city_id' => 'City ID',
            'address' => 'Address',
            'address_dop' => 'Address Dop',
            'phone' => 'Phone',
            'slug' => 'Slug',
            'description' => 'Description',
            'meta_keyword' => 'Meta Keyword',
            'meta_description' => 'Meta Description',
        ];
    }
}
