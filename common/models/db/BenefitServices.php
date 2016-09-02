<?php

namespace common\models\db;


use Yii;

/**
 * This is the model class for table "benefit_services".
 *
 * @property integer $id
 * @property integer $servises_id
 * @property integer $benefit_id
 */
class BenefitServices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'benefit_services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['servises_id', 'benefit_id'], 'required'],
            [['servises_id', 'benefit_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'servises_id' => 'Servises ID',
            'benefit_id' => 'Benefit ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getbenefit()
    {
        return $this->hasMany(Benefit::className(), ['id' => 'benefit_id']);
    }
}
