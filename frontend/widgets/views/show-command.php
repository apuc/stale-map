<?php
/**
 * @var $command common\models\db\Command
 * @var $skills common\models\db\SkillsCommand
 * @var $arrSkills
 */

?>

<section class="section-command" id="#about">
    <div class="site-container">
        <h3>команда</h3>
        <div class="text">
            <p>
                Наш дружный коллектив сложился на протяжении долгих лет качественной работы
                Это первоклассные мастера, готовые взяться за самые виртуозные проекты
            </p>
        </div>
        <div class="items galleryCommand">
            <?php

            foreach ($command as $item): ?>
                <div class="item">
                    <div class="img">
                        <img src="<?= $item->photo; ?>" alt=""/>
                    </div>
                    <span class="name"><?= $item->title; ?> </span>
                    <span class="function"><?= $item->position; ?></span>
                    <ul>
                        <?php foreach($skills as $skill): ?>
                            <li <?= (in_array($skill->id, $arrSkills[$item->id])) ? '' : 'class="not-check"' ?>><?= $skill->title; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
        <h4>Ключевые факторы успеха</h4>
        <div class="text">
            <p>
                Задача организации, в особенности же сложившаяся структура организации представляет собой интересный
                эксперимент
                проверки системы обучения кадров,
                соответствует насущным потребностям. Разнообразный и богатый опыт реализация намеченных плановых заданий
                обеспечивает широкому
                кругу (специалистов) участие в формировании соответствующий условий активизации. Идейные соображения
                высшего
                порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет
                оценить
                значение направлений прогрессивного развития.
            </p>
            <p>
                Миссия орагнизации и место обучения кадров позволяет оценить значение системы обучения кадров,
                соответствует
                насущным потребностям.
                Товарищи! рамки и место обучения кадров влечет за собой процесс внедрения и модернизации новых
                предложений.
            </p>
        </div>
        <div class="btn-wrapp style-b">
            <a href="#parent" class="open_modal"><span>узнай, что тебя ждет</span></a>
        </div>
    </div>
</section>



