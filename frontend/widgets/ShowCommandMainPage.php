<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 05.07.2016
 * Time: 13:02
 */

namespace frontend\widgets;


use common\models\db\Command;
use common\models\db\SkillsCommand;
use yii\base\Widget;

class ShowCommandMainPage extends Widget
{

    public function run(){
        $command = Command::find()
            ->leftJoin('command_skills', '`command_skills`.`command_id` = `command`.`id`')
            ->with('command_skills')
            ->all();
        $skills = SkillsCommand::find()->all();
        $arrSkills = [];
        foreach ($command as $item) {
            foreach($item['command_skills'] as $value){
                $arrSkills[$item->id][] = $value->skills_id;
            }
        }


        //\common\classes\Debug::prn($skills);
        return $this->render('show-command',
            [
                'command' => $command,
                'skills' => $skills,
                'arrSkills' => $arrSkills,
            ]
        );
    }
}