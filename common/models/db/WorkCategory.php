<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "work_category".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $work_id
 */
class WorkCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'work_id'], 'required'],
            [['category_id', 'work_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'work_id' => 'Work ID',
        ];
    }

}
