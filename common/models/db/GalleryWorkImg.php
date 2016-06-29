<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "gallery_work_img".
 *
 * @property integer $id
 * @property integer $work_id
 * @property string $img
 */
class GalleryWorkImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_work_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_id', 'img'], 'required'],
            [['work_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'work_id' => 'Work ID',
            'img' => 'Img',
        ];
    }
}
