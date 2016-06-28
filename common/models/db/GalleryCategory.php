<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "gallery_category".
 *
 * @property integer $id
 * @property string $name
 *
 * @property GalleryWork[] $galleryWorks
 */
class GalleryCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGalleryWorks()
    {
        return $this->hasMany(GalleryWork::className(), ['category_id' => 'id']);
    }
}
