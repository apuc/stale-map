<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property integer $id
 * @property string $logo
 * @property string $link
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logo', 'link'], 'required'],
            [['logo', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
            'link' => 'Link',
        ];
    }
}
