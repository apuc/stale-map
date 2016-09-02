<?php
use common\classes\S;

?>

<header class="header-wrapper">
    <div class="site-container">
        <div class="header-top">
            <ul class="social">
                <li class="soc-1"><a href="<?= S::get('vk_link'); ?>"></a></li>
                <li class="soc-2"><a href="<?= S::get('fb_link'); ?>"></a></li>
                <li class="soc-3"><a href="<?= S::get('tw_link'); ?>"></a></li>
                <li class="soc-4"><a href="<?= S::get('g_link'); ?>"></a></li>
                <li class="soc-5"><a href="<?= S::get('you_link'); ?>"></a></li>
            </ul>
            <div class="right-part">
                <div class="sub__wrap">
                    <a href="" class="sub">подписаться</a>
                    <span class="sub__box">
                        <form class="subscription">
                            <h5>Подписаться на новости</h5>
                            <input name="subname" type="text" class="sub__box_inp" placeholder="Ваше имя" required>
                            <input name="subemail" type="email" class="sub__box_inp" placeholder="Ваше E-mail" required>
                            <input type="hidden" name="csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
                            <button class="sub__box_btn requestSub">Подписаться</button>
                        </form>
                    </span>
                </div>
                <span class="tel"><?= S::get('phone_header') ?></span>
                <div class="mail__wrap">
                    <a href="" class="mail"><img src="/theme/images/icons/mail-1.png" alt=""/></a>
                    <div class="mail__box">
                        <form class="feedback">
                            <h4>Напишите нам</h4>
                            <p>У Вас есть вопрос к нам? Не стесняйтесь - пишите! Наша служба поддержки свяжется с Вами, как можно скорее</p>
                            <input name="feedname" type="text" class="sub__box_inp" placeholder="Ваше имя" required>
                            <input name="feedemail" type="email" class="sub__box_inp" placeholder="Ваше E-mail" required>
                            <textarea name="feedtext"  class="sub__box_text" placeholder="Сообщение..." required></textarea>
                            <input type="hidden" name="csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
                            <button class="sub__box_btn requestFeed">отправить</button>
                        </form>
                    </div>
                </div>
                <a href="" class="search" id="showFormSearch"><img src="/theme/images/icons/search.png" alt=""/>

                <form action="<?= \yii\helpers\Url::to(['/search'])?>" method="post" id="search">
                    <input type="text" name="searchSite" placeholder="Поиск" class="inpSearch">
                    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
                </form>
                </a>
            </div>
        </div>
        <div class="header-bottom">
            <div class="site-container">
                <a href="/" class="logo"><img src="/img/logo.png" alt=""/></a>
                <a href="" class="mobile-menu"><span></span></a>
                <nav class="nav">
                    <ul>
                        <li><a href="<?= \yii\helpers\Url::to(['/gallery'])?>">Галерея</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/blog'])?>">блог</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/cooperation'])?>">сотрудничество</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/about'])?>">о нас</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/contact'])?>">контакты</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/price'])?>">прайс</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/franchise'])?>">франшиза</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/specials'])?>">спецпредложения</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>