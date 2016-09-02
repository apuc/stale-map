<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "services_img".
 *
 * @property integer $id
 * @property integer $services_id
 * @property string $img
 */
class ServicesImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['services_id', 'img'], 'required'],
            [['services_id'], 'integer'],
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
            'services_id' => 'Services ID',
            'img' => 'Img',
        ];
    }
}
