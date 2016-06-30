<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "diplom".
 *
 * @property integer $id
 * @property string $img
 */
class Diplom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diplom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img'], 'required'],
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
            'img' => 'Img',
        ];
    }
}
