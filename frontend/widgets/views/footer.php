<?php
use common\classes\S;
?>

<footer class="footer-wrapper">
    <div class="site-container">
        <div class="info">
                        <span class="tel-1">
                            <?= S::get('phone_1'); ?>
                        </span>
            <a class="email" href="mailto:Levon-Vinous@yandex.ru"><?= S::get('email') ?></a>
            <span class="address"><?= S::get('address') ?></span>
            <span class="tel-2"><?= S::get('phone_2') ?></span>
        </div>
        <ul class="social">
            <li><a href="<?= S::get('inst_link'); ?>"></a></li>
            <li><a href="<?= S::get('vk_link'); ?>"></a></li>
            <li><a href="<?= S::get('you_link'); ?>"></a></li>
        </ul>
        <p>партнеры для кросс-продвижения</p>
        <ul class="partners">
            <?php foreach($partners as $partner):?>
                <li><a href="<?= $partner->link?>"><img src="<?= $partner->logo; ?>" alt=""/></a></li>
            <?php endforeach; ?>
        </ul>
        <ul class="menu">
            <?php
                if(Yii::$app->controller->module->id == 'mainpage')
            ?>
            <li><a href="<?= (Yii::$app->controller->module->id == 'mainpage') ? '#requestStailingForm' : '/#requestStailingForm'?>">заявка на стайлинг</a></li>
            <li><a href="#parent" class="open_modal">партнерство</a></li>
            <li><a href="#IndividualDesign" class="open_modal">индивидуальный дизайн</a></li>
            <li><a href="#taping" class="open_modal">оклейка по выезду</a></li>
            <li><a href="#subscription" class="open_modal">подписаться на новости</a></li>
        </ul>
        <span class="copy">Copyright 2016 название компании. Все права защищены</span>
    </div>
</footer>


<!-- Modal Подписаться-->
<div id="subscription" class="modal_div modalSub"> <!-- скрытый див с уникaльным id = modal1 -->
    <span class="modal_close">X</span>
    <h3>Подписаться на новости</h3>
    <form class="subscription">
        <div class="form-type-text">
            <input type="text" name="subname" placeholder="Ваше имя" required/>
        </div>
        <div class="form-type-text">
            <input type="email" name="subemail" placeholder="Ваш E-mail" required/>
        </div>
        <div class="btn-wrapp style-c">
            <input type="submit" class="btn requestSub" value="подписаться"/>
        </div>
        <input type="hidden" name="csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
    </form>
</div>

<!-- Modal Feedback-->
<div id="feedback" class="modal_div modalFeed"> <!-- скрытый див с уникaльным id = modal1 -->
    <span class="modal_close">X</span>
    <h3>Напишите нам</h3>
    <form class="feedback">
        <div class="form-type-text">
            <input type="text" name="feedname" placeholder="Ваше имя" required/>
        </div>
        <div class="form-type-text">
            <input type="email" name="feedemail" placeholder="Ваш E-mail" required/>
        </div>
        <div class="form-type-text">
            <textarea name="feedtext"  placeholder="Напишите нам" cols="30" rows="10" required></textarea>
        </div>
        <div class="btn-wrapp style-c">
            <input type="submit" class="btn requestFeed" value="отправить"/>
        </div>
        <input type="hidden" name="csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
    </form>
</div>


<!-- Modal FORM PARENTS-->
<div id="parent" class="modal_div modalParent"> <!-- скрытый див с уникaльным id = modal1 -->
    <span class="modal_close">X</span>
    <h3>Анкета партнера</h3>
    <form class="parent">
            <!-- open .questionary__form_group -->
            <div class="questionary__form_group">
                <label for="" class="questionary__form_title">Название: </label>
                <input type="text" name="parentName" class="questionary__form_inp" placeholder="Фирма/ип/частное лицо" required/>
            </div>
            <!-- close .questionary__form_group -->
            <!-- open .questionary__form_group -->
            <div class="questionary__form_group">
                <label for="" class="questionary__form_title">Вид дейтельности: </label>
                <input type="text" name="parentVid" class="questionary__form_inp" required />
            </div>
            <!-- close .questionary__form_group -->

            <!-- open .questionary__form_group -->
            <div class="questionary__form_group">
                <label for="" class="questionary__form_title">Обород за посл.год: </label>
                <input type="text" name="parentOborod" class="questionary__form_inp" required />
            </div>
            <!-- close .questionary__form_group -->
            <!-- open .questionary__form_group -->
            <div class="questionary__form_group">
                <label for="" class="questionary__form_title">Фактический адрес: </label>
                <input type="text" name="parentAddress" class="questionary__form_inp" required />
            </div>
            <!-- close .questionary__form_group -->

            <!-- open .questionary__form_group -->
            <div class="questionary__form_group">
                <label for="" class="questionary__form_title">Контактное лицо: </label>
                <input type="text" name="parentContact"class="questionary__form_inp" required />
            </div>
            <!-- close .questionary__form_group -->
            <!-- open .questionary__form_group -->
            <div class="questionary__form_group">
                <label for="" class="questionary__form_title">Телефон: </label>
                <input type="text" name="parentPhone"class="questionary__form_inp" required />
            </div>
            <!-- close .questionary__form_group -->

            <!-- open .questionary__form_group -->
            <div class="questionary__form_group">
                <label for="" class="questionary__form_title">Почта: </label>
                <input type="email" name="parentEmail"class="questionary__form_inp" required/>
            </div>
            <!-- close .questionary__form_group -->

            <!-- open .questionary__form_group -->
            <div class="questionary__form_group">
                <label for="" class="questionary__form_title">Сайт: </label>
                <input type="text" name="parentSite" class="questionary__form_inp"  />
            </div>
            <!-- close .questionary__form_group -->
            <div class="btn-wrapp style-c">
                <input type="submit" class="btn requestParent" value="отправить"/>
            </div>

        <input type="hidden" name="csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
    </form>
</div>


<!-- Modal индивидуальный дизайн-->
<div id="IndividualDesign" class="modal_div modalDes"> <!-- скрытый див с уникaльным id = modal1 -->
    <span class="modal_close">X</span>
    <h3>Индивидуальный дизайн</h3>
    <form class="IndividualDesign">
        <div class="form-type-text">
            <input type="text" name="desphone" placeholder="Ваш телефон" required/>
        </div>

        <div class="btn-wrapp style-c">
            <input type="submit" class="btn requestDes" value="посоветоваться"/>
        </div>
        <input type="hidden" name="csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
    </form>
</div>

<!-- Modal оклейка по выезду-->
<div id="taping" class="modal_div modalTap"> <!-- скрытый див с уникaльным id = modal1 -->
    <span class="modal_close">X</span>
    <h3>Oклейка по выезду</h3>
    <form class="taping">
        <div class="form-type-text">
            <input type="text" name="tapphone" placeholder="Ваш телефон" required/>
        </div>
        <div class="form-type-text">
            <input type="text" name="tapaddress" placeholder="Ваш адрес" required/>
        </div>

        <div class="btn-wrapp style-c">
            <input type="submit" class="btn requestTap" value="узнать цену"/>
        </div>
        <input type="hidden" name="csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
    </form>
</div>

<div id="overlay"></div><!-- Пoдлoжкa, oднa нa всю стрaницу -->
