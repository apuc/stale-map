<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "gallery_work".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $short_description
 * @property string $thumb
 * @property string $slug
 * @property string $meta_description
 * @property string $meta_keywords
 * @property integer $dt_add
 * @property integer $dt_update
 * @property integer $link_video
 */
class GalleryWork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'short_description', 'thumb', 'slug', 'meta_description', 'meta_keywords'], 'required'],
            [['description'], 'string'],
            [['dt_add', 'dt_update'], 'integer'],
            [['name', 'short_description', 'thumb', 'slug', 'meta_description', 'meta_keywords','link_video'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'short_description' => 'Short Description',
            'thumb' => 'Thumb',
            'slug' => 'Slug',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'dt_add' => 'Dt Add',
            'dt_update' => 'Dt Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getgallery_work()
    {
        return $this->hasMany(WorkCategory::className(), ['work_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getgallery_work_img()
    {
        return $this->hasMany(GalleryWorkImg::className(), ['work_id' => 'id']);
    }
}
