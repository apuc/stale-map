<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property integer $id
 * @property string $title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $short_description
 * @property string $description
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'meta_description', 'meta_keywords', 'short_description', 'description'], 'required'],
            [['short_description', 'description'], 'string'],
            [['title', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
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
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'short_description' => 'Short Description',
            'description' => 'Description',
        ];
    }
}
