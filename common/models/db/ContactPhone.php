<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "contact_phone".
 *
 * @property integer $id
 * @property string $phone
 */
class ContactPhone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_phone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
        ];
    }
}
