<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "franchise_img".
 *
 * @property integer $id
 * @property string $img
 */
class FranchiseImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'franchise_img';
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
