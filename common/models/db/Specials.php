<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "specials".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $short_description
 * @property string $description
 * @property string $slug
 * @property integer $dt_add
 * @property integer $dt_update
 * @property integer $type
 * @property string $meta_keywords
 * @property string $meta_description
 */
class Specials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img', 'short_description', 'description', 'type'], 'required'],
            [['description'], 'string'],
            [['dt_add', 'dt_update', 'type'], 'integer'],
            [['title', 'img', 'short_description', 'slug', 'meta_keywords', 'meta_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'img' => 'Img',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'slug' => 'Slug',
            'dt_add' => 'Dt Add',
            'dt_update' => 'Dt Update',
            'type' => 'Type',
            'meta_keywords' => 'Meta Keywords',
            'meta_description' => 'Meta Description',
        ];
    }
}
