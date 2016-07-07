<?php
use common\classes\S;

$this->title = S::get('title');
$this->registerMetaTag([
    'name' => 'description',
    'content' => S::get('description'),
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' =>S::get('keywords') ,
]);
?>

        <section class="section-slider">
            <div class="flexslider top-slider">
                <ul class="slides">
                    <li>
                        <div class="desc">
                            <h2>Стайлинг автомобилей</h2>
                            <h5>предел совершенства достигается здесь</h5>
                        </div>
                        <img src="theme/images/tmp/main-slide-1.jpg" alt=""/>
                    </li>
                    <li>
                        <img src="theme/images/tmp/main-slide-2.jpg" alt=""/>
                    </li>
                    <li>
                        <img src="theme/images/tmp/main-slide-3.jpg" alt=""/>
                    </li>
                    <li>
                        <img src="theme/images/tmp/main-slide-4.jpg" alt=""/>
                    </li>
                </ul>
            </div>
        </section>

        <section class="section-uslugi">
            <div class="site-container">
                <h3>Услуги </h3>
                <div class="text">
                    <p>
                        Наша команда славится высоким сервисом и качеством предоставляемых услуг
                        Каждый день у нас появляется еще один постоянный покупатель
                    </p>
                </div>
                <div class="items">
                    <?php foreach($services as $item): ?>
                        <div class="item">
                            <a href="<?= \yii\helpers\Url::to(['/services/' . $item->slug]); ?>">
                                <span><?= $item->title?></span>
                                <div class="img">
                                    <img src="<?= $item->icon; ?>" alt=""/>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section-bg section-bg-1">
            <div class="transform-inner">

            </div>
        </section>

        <section class="section-gallery" id="gallery">
            <div class="transform-inner">
                <div class="site-container">
                    <a href="<?= \yii\helpers\Url::to(['/gallery'])?>"><h3>Галерея</h3></a>
                    <div class="text">
                        <p>
                            Галерея с нашими проектами постоянно обновляется
                            Здесь представлена коллекция лучших примеров работ нашей команды
                        </p>
                    </div>
                    <div class="gallery">
                        <div class="button-group filter-button-group">
                            <button data-filter="*">Все</button>
                            <?php foreach($category as $item): ?>
                                <button data-filter=".group-<?= $item->id ?>"><?= $item->name; ?></button>
                            <?php endforeach; ?>
                        </div>
                        <div class="grid">
                            <?php foreach ($work as $item): ?>
                                <div class="element-item transition
                        <?php foreach ($item['gallery_work'] as $i): ?>
                        group-<?= $i->category_id?>
                        <?php endforeach ?>
                        ">
                                    <a class="fancybox" rel="gallery1" href="<?= $item->thumb ?>" title="<a href='<?= \yii\helpers\Url::to(['/gallery/' . $item->slug]) ?>'><?= $item->name; ?></a>">
                                        <img src="<?= $item->thumb ?>" alt=""/>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-vigoda">
            <div class="site-container">
                <h3>брендирование пленкой - самый выгодный способ</h3>
                <p>
                    Не следует, однако забывать, что начало повседневной работы по формированию позиции представляет собой
                    интересный эксперимент проверки направлений прогрессивного развития. Равным образом постоянное
                    информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение форм развития.
                </p>
                <div class="items">
                    <div class="item">
                        <div class="img">
                            <img src="theme/images/tmp/v-item-1.png" alt=""/>
                        </div>
                        <span>самая лучшая читаемость</span>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="theme/images/tmp/v-item-2.png" alt=""/>
                        </div>
                        <span>минимальные ресурсы</span>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="theme/images/tmp/v-item-3.png" alt=""/>
                        </div>
                        <span>максимальная брендовость</span>
                    </div>
                </div>
                <div class="btn-wrapp style-a">
                    <a href="#parent" class="btn open_modal">получить коммерческое предложение для моей компании</a>
                </div>
            </div>
        </section>

        <?= \frontend\widgets\ShowCommandMainPage::widget(); ?>

        <section class="section-diploma transform-skew">
            <div class="transform-inner">
                <div class="site-container">
                    <h3>Дипломы</h3>
                    <div class="flexslider diploma-slider">
                        <ul class="slides">
                            <?php
                            $i = 1;
                            foreach($diplom as $item):?>
                                <?= ($i == 1) ? '<li>' : ''; ?>
                                <a class="fancybox" rel="gallery1" href="<?= $item->img; ?>" title="">
                                    <img src="<?= $item->img; ?>" alt=""/>
                                </a>
                                <?= ($i == 3) ? '</li>' : ''; ?>
                                <?php ($i == 3) ? $i=0 : ''; ?>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-review">
            <div class="site-container">
                <h3>отзывы</h3>
                <div class="flexslider flexslider_main review-slider">
                    <ul class="slides">
                        <?php foreach($reviews as $review): ?>
                            <li>
                                <div class="item">
                                    <div class="left-part">
                                        <div class="img">
                                            <img src="<?= $review->img; ?>" alt=""/>
                                        </div>
                                        <div class="stars">
                                            <img src="img/tmp/stars.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <p>
                                            <?= $review->text; ?>
                                        </p>
                                        <span class="name"><?= $review->name; ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </section>

        <section class="section-bg section-bg-2">
            <div class="transform-inner">

            </div>
        </section>

        <section class="section-form" id="requestStailingForm">
            <div class="site-container">
                <h3>заявка на стайлинг</h3>
                <form class="form" method="post">
                    <div class="form-type-text">
                        <input type="text" name="name" placeholder="Ваше Имя" required/>
                    </div>
                    <div class="form-type-text">
                        <input type="text" name="lasname" placeholder="Ваша фамилия" required/>
                    </div>
                    <div class="form-type-text">
                        <input type="email" name="email" placeholder="Ваш E-mail" required/>
                    </div>
                    <div class="btn-wrapp style-c">
                        <input type="submit" class="btn requestStiling" value="записаться"/>
                    </div>
                    <input type="hidden" name="csrf" value="<?= Yii::$app->request->getCsrfToken(); ?>">
                    <p>Наш специалист ответит вам в течении 10 минут, данные, предоставленные нам, не попадут 3-им лицам</p>
                </form>
                <h6>Помимо стандартных услуг, наша компания может предложить вам:</h6>
                <div class="items">
                    <div class="item">
                        <div class="img">
                            <img src="theme/images/tmp/f-item-1.png" alt=""/>
                        </div>
                        <span>заказ дизайна у нас</span>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="theme/images/tmp/f-item-2.png" alt=""/>
                        </div>
                        <span>оклейка по выезду</span>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="theme/images/tmp/f-item-3.png" alt=""/>
                        </div>
                        <span>инновация в ваш бизнес</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-studies">
            <div class="site-container">
                <h3>сеть студий</h3>
                <p>Ниже вы можете посмотреть список, ближайших к вам, студий нашей компании</p>
                <div class="left-part">
                    <div class="item">
                        <span class="title">Россия:</span>
                        <div class="city">
                            <a href="" data-lat="55.7494733" data-lng="37.3523199" data-zoom="6"> Москва</a>
                            <ul>
                                <li><a href="" data-lat="55.6142804" data-lng="37.563635" data-zoom="11">ул.Согласия 7</a></li>
                                <li><a href="" data-lat="55.7536093" data-lng="37.3526962" data-zoom="11">пл. Победы 2</a></li>
                            </ul>
                        </div>
                        <div class="city">
                            <a href="" data-lat="59.9174925" data-lng="30.0448779" data-zoom="6"> Санкт-Петербург </a>
                        </div>
                        <div class="city">
                            <a href="" data-lat="54.7115288" data-lng="20.3244481" data-zoom="6"> Калининград</a>
                            <ul>
                                <li><a href="" data-lat="54.7419887" data-lng="20.4908873" data-zoom="11">ул.Согласия 7</a></li>
                                <li><a href="" data-lat="54.719379" data-lng="20.4975536" data-zoom="11">пл. Победы 2</a></li>
                            </ul>
                        </div>
                        <div class="city">
                            <a href="" data-lat="51.5343656" data-lng="45.7299543" data-zoom="6"> Саратов </a>
                        </div>
                        <div class="city">
                            <a href="" data-lat="43.6018244" data-lng="39.6550888" data-zoom="6"> Сочи </a>
                        </div>
                        <div class="city">
                            <a href="" data-lat="68.9674734" data-lng="32.8056206" data-zoom="6">Мурманск</a>
                        </div>
                        <div class="city">
                            <a href="" data-lat="48.6705332" data-lng="44.2265192" data-zoom="6">Волгоград</a>
                        </div>
                    </div>
                    <div class="item">
                        <span class="title"> Украина:</span>
                        <div class="city">
                            <a href="" data-lat="50.4021368" data-lng="30.2525035" data-zoom="6"> Киев </a>
                        </div>
                        <div class="city">
                            <a href="" data-lat="49.9947277" data-lng="36.1457399" data-zoom="6">Харьков</a>
                        </div>
                        <div class="city">
                            <a href="" data-lat="46.460123" data-lng="30.5717021" data-zoom="6">Одесса</a>
                        </div>
                    </div>
                    <div class="item">
                        <span class="title"> Белорусь:</span>
                        <div class="city">
                            <a href="" data-lat="53.8840092" data-lng="27.45489" data-zoom="6"> Минск </a>
                        </div>
                    </div>
                </div>
                <div id="map" class="right-part mapol">

                </div>
            </div>
        </section>

        <section class="section-bg section-bg-3">

        </section>

        <section class="section-fran" id="franchise">
            <div class="site-container">
                <a href="<?= \yii\helpers\Url::to(['/franchise'])?>"><h3>Франшиза</h3></a>
                <div class="text">
                    <p>
                        Франчайзинг дает Вам шанс стать нашим партнером, а значит, работать вместе с успешной компанией,
                        специализирующейся на стайлинге, защите и тонировке автомобилей. Большим преимуществом этого сотрудничества
                        является миниминизация ошибок и хорошие деньги, в отличие
                        от других обычных видов бизнеса. Вы начинаете с безопасного и быстрого выхода на рынок. Наша репутация и большой
                        опыт приведут
                        Вас к желанному успеху. А чтобы результат не заставил Вас долго ждать, мы разработали специальную программу
                        обучения технологии, при помощи которой вы в кротчайшие сроки воейдет в курс дела.
                    </p>
                    <p>
                        За долгие годы работы мы выполнили сотни проектов и обслужили сотни клиентов, а количество наших партнеров
                        неуклонно растет!
                    </p>
                </div>
                <div class="items">
                    <div class="item">
                        <p>проектов выполнено</p>
                        <div class="line-wrapper el-with-animation">
                            <div class="desc">532</div>
                            <div class="full"></div>
                            <div class="yellow"></div>
                        </div>
                    </div>
                    <div class="item">
                        <p>клиентов обслужено</p>
                        <div class="line-wrapper el-with-animation">
                            <div class="desc">345</div>
                            <div class="full"></div>
                            <div class="yellow"></div>
                        </div>
                    </div>
                    <div class="item">
                        <p>партнеров привлечено</p>
                        <div class="line-wrapper el-with-animation">
                            <div class="desc">38</div>
                            <div class="full"></div>
                            <div class="yellow"></div>
                        </div>
                    </div>
                </div>
                        <span class="title">
                            Вместе с нами быстрый рост доходов и клиентов обеспечен!
                        </span>
                <div class="field-items">
                    <div class="field-item">
                        <div class="img">
                            <img src="theme/images/tmp/fr-item-1.png" alt=""/>
                        </div>
                        <span>быстрый старт</span>
                    </div>
                    <div class="field-item">
                        <div class="img">
                            <img src="theme/images/tmp/fr-item-2.png" alt=""/>
                        </div>
                        <span>отлаженная стратегия</span>
                    </div>
                    <div class="field-item">
                        <div class="img">
                            <img src="theme/images/tmp/fr-item-3.png" alt=""/>
                        </div>
                        <span>работа на себя</span>
                    </div>
                </div>
                <div class="btn-wrapp style-d">
                    <a href="#parent" class="btn open_modal">Заведи успешный бизнес</a>
                </div>
            </div>
        </section>

        <section class="section-bg section-map">
            <div id="bg_map" class="home__bg-map" wifth="100%" height="100%"></div>
        </section>