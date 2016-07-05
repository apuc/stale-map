<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "franchise".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $meta_description
 * @property string $meta_keywords
 */
class Franchise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'franchise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'meta_description'], 'required'],
            [['text'], 'string'],
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
            'text' => 'Text',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
        ];
    }
}
