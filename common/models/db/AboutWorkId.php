<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "about_work_id".
 *
 * @property integer $id
 * @property integer $work_id
 */
class AboutWorkId extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about_work_id';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_id'], 'required'],
            [['work_id'], 'integer'],
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
        ];
    }
}
