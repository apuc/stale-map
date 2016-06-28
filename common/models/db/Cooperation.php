<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "cooperation".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $text
 */
class Cooperation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cooperation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img', 'text'], 'required'],
            [['name', 'img', 'text'], 'string', 'max' => 255],
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
            'text' => 'Text',
        ];
    }
}
