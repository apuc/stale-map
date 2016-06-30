<?php
use common\classes\S;

?>

<header class="header-wrapper">
    <div class="site-container">
        <div class="header-top">
            <ul class="social">
                <li class="soc-1"><a href="#"></a></li>
                <li class="soc-2"><a href="#"></a></li>
                <li class="soc-3"><a href="#"></a></li>
                <li class="soc-4"><a href="#"></a></li>
                <li class="soc-5"><a href="#"></a></li>
            </ul>
            <div class="right-part">
                <a href="#" class="sub">подписаться</a>
                <span class="tel"><?= S::get('phone_header') ?></span>
                <a href="" class="mail"><img src="/theme/images/icons/mail-1.png" alt=""/></a>
                <a href="" class="search"><img src="/theme/images/icons/search.png" alt=""/></a>
            </div>
        </div>
        <div class="header-bottom">
            <div class="site-container">
                <a href="/" class="logo"><img src="/img/logo.png" alt=""/></a>
                <a href="" class="mobile-menu"><span></span></a>
                <nav class="nav">
                    <ul>
                        <li><a href="#gallery">Галерея</a></li>
                        <li><a href="#blog">блог</a></li>
                        <li><a href="#sotr">сотрудничество</a></li>
                        <li><a href="#about">о нас</a></li>
                        <li><a href="#contacts">контакты</a></li>
                        <li><a href="#price">прайс</a></li>
                        <li><a href="#franchise">франшиза</a></li>
                        <li><a href="#deals">спецпредложения</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>