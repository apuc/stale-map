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

                <a href="#subscription" class="sub open_modal">подписаться</a>
                <span class="tel"><?= S::get('phone_header') ?></span>
                <a href="#feedback" class="mail open_modal"><img src="/theme/images/icons/mail-1.png" alt=""/></a>

                
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