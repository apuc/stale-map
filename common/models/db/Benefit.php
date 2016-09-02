<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "benefit".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 */
class Benefit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'benefit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img'], 'required'],
            [['name', 'img'], 'string', 'max' => 255],
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
            'img' => 'Img',
        ];
    }
}
