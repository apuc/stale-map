<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property integer $dt_add
 * @property integer $dt_update
 * @property string $title
 * @property string $short_description
 * @property string $description
 * @property string $images
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $slug
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'short_description', 'description', 'slug'], 'required'],
            [['dt_add', 'dt_update'], 'integer'],
            [['description'], 'string'],
            [['title', 'short_description', 'images', 'meta_description', 'meta_keywords', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dt_add' => 'Дата добавления',
            'dt_update' => 'Дата обновления',
            'title' => 'Заголовок',
            'short_description' => 'Короткий текст',
            'description' => 'Текст',
            'images' => 'Изображение',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'slug' => 'Slug',
        ];
    }
}
