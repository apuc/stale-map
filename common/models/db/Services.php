<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $icon
 * @property string $description
 * @property string $slug
 * @property integer $dt_add
 * @property integer $dt_update
 * @property string $meta_description
 * @property string $meta_keywords
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img', 'icon', 'description'], 'required'],
            [['description'], 'string'],
            [['dt_add', 'dt_update'], 'integer'],
            [['title', 'img', 'icon', 'slug', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
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
            'icon' => 'Icon',
            'description' => 'Description',
            'slug' => 'Slug',
            'dt_add' => 'Dt Add',
            'dt_update' => 'Dt Update',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
        ];
    }
}
