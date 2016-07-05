<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "command".
 *
 * @property integer $id
 * @property string $title
 * @property string $position
 * @property string $photo
 */
class Command extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'command';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'position', 'photo'], 'required'],
            [['title', 'position', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'position' => 'Position',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getcommand_skills()
    {
        return $this->hasMany(CommandSkills::className(), ['command_id' => 'id']);
    }
}
