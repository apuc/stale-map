<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "command_skills".
 *
 * @property integer $id
 * @property integer $command_id
 * @property integer $skills_id
 */
class CommandSkills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'command_skills';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['command_id', 'skills_id'], 'required'],
            [['command_id', 'skills_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'command_id' => 'Command ID',
            'skills_id' => 'Skills ID',
        ];
    }
}
