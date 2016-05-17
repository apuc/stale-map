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

<div class="outer-wrapper">

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



                    <a href="" class="mail"><img src="theme/images/icons/mail-1.png" alt=""/></a>

                    <a href="" class="search"><img src="theme/images/icons/search.png" alt=""/></a>



                </div>

            </div>

            <div class="header-bottom">

                <a href="#" class="logo"><img src="<?= S::get('logo') ?>" alt=""/></a>

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

    </header>



    <div class="content-wrapper">



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

                    <div class="item">

                        <a href="">

                            <span>винилография</span>



                            <div class="img">

                                <img src="theme/images/tmp/u-item1.png" alt=""/>

                            </div>

                        </a>

                    </div>



                    <div class="item">

                        <a href="">

                            <span>обтяжка/авто винил</span>



                            <div class="img">

                                <img src="theme/images/tmp/u-item2.png" alt=""/>

                            </div>

                        </a>

                    </div>



                    <div class="item">

                        <a href="">

                            <span>брендирование</span>



                            <div class="img">

                                <img src="theme/images/tmp/u-item3.png" alt=""/>

                            </div>

                        </a>

                    </div>



                    <div class="item">

                        <a href="">

                            <span>защита кузова</span>



                            <div class="img">

                                <img src="theme/images/tmp/u-item4.png" alt=""/>

                            </div>

                        </a>

                    </div>



                    <div class="item">

                        <a href="">

                            <span>пошив салона</span>



                            <div class="img">

                                <img src="theme/images/tmp/u-item5.png" alt=""/>

                            </div>

                        </a>

                    </div>



                    <div class="item">

                        <a href="">

                            <span>мотостайлинг</span>



                            <div class="img">

                                <img src="theme/images/tmp/u-item6.png" alt=""/>

                            </div>

                        </a>

                    </div>





                    <div class="item">

                        <a href="">

                            <span>стайлиг аксессуары</span>



                            <div class="img">

                                <img src="theme/images/tmp/u-item7.png" alt=""/>

                            </div>

                        </a>

                    </div>



                    <div class="item">

                        <a href="">

                            <span>фасады и интерьеры</span>



                            <div class="img">

                                <img src="theme/images/tmp/u-item8.png" alt=""/>

                            </div>

                        </a>

                    </div>

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

                    <h3>Галерея</h3>



                    <div class="text">

                        <p>

                            Галерея с нашими проектами постоянно обновляется

                            Здесь представлена коллекция лучших примеров работ нашей команды

                        </p>

                    </div>

                    <div class="gallery">

                        <div class="button-group filter-button-group">

                            <button data-filter="*">Все</button>

                            <button data-filter=".group-1">винилография</button>

                            <button data-filter=".group-2">обтяжка</button>

                            <button data-filter=".group-3">брендирование</button>

                            <button data-filter=".group-4, .group-2">мотостайлинг</button>

                            <button data-filter=".group-5">остальное</button>

                        </div>



                        <div class="grid">

                            <div class="element-item transition group-1">

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-1.jpg" title="">

                                    <img src="theme/images/tmp/g-item-1.jpg" alt=""/>

                                </a>

                            </div>

                            <div class="element-item transition group-1">

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-2.jpg" title="">

                                    <img src="theme/images/tmp/g-item-2.jpg" alt=""/>

                                </a>

                            </div>

                            <div class="element-item  group-2">

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-3.jpg" title="">

                                    <img src="theme/images/tmp/g-item-3.jpg" alt=""/>

                                </a>

                            </div>

                            <div class="element-item  group-2">

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-4.jpg" title="">

                                    <img src="theme/images/tmp/g-item-4.jpg" alt=""/>

                                </a>

                            </div>

                            <div class="element-item  group-2">

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-5.jpg" title="">

                                    <img src="theme/images/tmp/g-item-5.jpg" alt=""/>

                                </a>

                            </div>

                            <div class="element-item  group-3">

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-6.jpg" title="">

                                    <img src="theme/images/tmp/g-item-6.jpg" alt=""/>

                                </a>

                            </div>

                            <div class="element-item transition group-4">

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-7.jpg" title="">

                                    <img src="theme/images/tmp/g-item-7.jpg" alt=""/>

                                </a>

                            </div>

                            <div class="element-item transition group-5">

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-8.jpg" title="">

                                    <img src="theme/images/tmp/g-item-8.jpg" alt=""/>

                                </a>

                            </div>

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

                    <a href="#" class="btn">получить коммерческое предложение для моей компании</a>

                </div>

            </div>

        </section>



        <section class="section-command" id="#about">

            <div class="site-container">

                <h3>команда</h3>



                <div class="text">

                    <p>

                        Наш дружный коллектив сложился на протяжении долгих лет качественной работы

                        Это первоклассные мастера, готовые взяться за самые виртуозные проекты

                    </p>

                </div>



                <div class="items">

                    <div class="item">

                        <div class="img">

                            <img src="theme/images/tmp/k-item-1.jpg" alt=""/>

                        </div>

                        <span class="name">Роман Абрамович </span>

                        <span class="function">директор</span>



                        <ul>

                            <li>Навыки Делигирования</li>

                            <li> Знание Маркетинга</li>

                            <li class="not-check"> Навыки Рекламы</li>

                            <li> Навыки Обтяжки</li>

                            <li> Художественное образ-ие</li>

                            <li> Создание Брэнда</li>

                            <li class="not-check"> Работа в 3D программах</li>

                            <li> Эксперт в автоиндустрии</li>

                        </ul>

                    </div>



                    <div class="item">

                        <div class="img">

                            <img src="theme/images/tmp/k-item-2.jpg" alt=""/>

                        </div>

                        <span class="name">Роман Абрамович </span>

                        <span class="function">директор</span>



                        <ul>

                            <li>Навыки Делигирования</li>

                            <li> Знание Маркетинга</li>

                            <li class="not-check"> Навыки Рекламы</li>

                            <li> Навыки Обтяжки</li>

                            <li> Художественное образ-ие</li>

                            <li> Создание Брэнда</li>

                            <li class="not-check"> Работа в 3D программах</li>

                            <li> Эксперт в автоиндустрии</li>

                        </ul>

                    </div>



                    <div class="item">

                        <div class="img">

                            <img src="theme/images/tmp/k-item-3.jpg" alt=""/>

                        </div>

                        <span class="name">Роман Абрамович </span>

                        <span class="function">директор</span>



                        <ul>

                            <li>Навыки Делигирования</li>

                            <li> Знание Маркетинга</li>

                            <li class="not-check"> Навыки Рекламы</li>

                            <li> Навыки Обтяжки</li>

                            <li> Художественное образ-ие</li>

                            <li> Создание Брэнда</li>

                            <li class="not-check"> Работа в 3D программах</li>

                            <li> Эксперт в автоиндустрии</li>

                        </ul>

                    </div>



                    <div class="item">

                        <div class="img">

                            <img src="theme/images/tmp/k-item4.jpg" alt=""/>

                        </div>

                        <span class="name">Роман Абрамович </span>

                        <span class="function">директор</span>



                        <ul>

                            <li>Навыки Делигирования</li>

                            <li> Знание Маркетинга</li>

                            <li class="not-check"> Навыки Рекламы</li>

                            <li> Навыки Обтяжки</li>

                            <li> Художественное образ-ие</li>

                            <li> Создание Брэнда</li>

                            <li class="not-check"> Работа в 3D программах</li>

                            <li> Эксперт в автоиндустрии</li>

                        </ul>

                    </div>

                </div>



                <h4>Ключевые факторы успеха</h4>



                <div class="text">

                    <p>

                        Задача организации, в особенности же сложившаяся структура организации представляет собой интересный эксперимент

                        проверки системы обучения кадров,

                        соответствует насущным потребностям. Разнообразный и богатый опыт реализация намеченных плановых заданий

                        обеспечивает широкому

                        кругу (специалистов) участие в формировании соответствующий условий активизации. Идейные соображения высшего

                        порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить

                        значение направлений прогрессивного развития.

                    </p>



                    <p>

                        Миссия орагнизации и место обучения кадров позволяет оценить значение системы обучения кадров, соответствует

                        насущным потребностям.

                        Товарищи! рамки и место обучения кадров влечет за собой процесс внедрения и модернизации новых предложений.

                    </p>

                </div>



                <div class="btn-wrapp style-b">

                    <a href=""><span>узнай, что тебя ждет</span></a>

                </div>

            </div>

        </section>



        <section class="section-diploma transform-skew">

            <div class="transform-inner">

                <div class="site-container">

                    <h3>Дипломы</h3>



                    <div class="flexslider diploma-slider">

                        <ul class="slides">

                            <li>

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/diplom-1.png" title="">

                                    <img src="theme/images/tmp/diplom-1.png" alt=""/>

                                </a>



                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/diplom-2.png" title="">

                                    <img src="theme/images/tmp/diplom-2.png" alt=""/>

                                </a>



                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/diplom-3.png" title="">

                                    <img src="theme/images/tmp/diplom-3.png" alt=""/>

                                </a>

                            </li>

                            <li>

                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/diplom-1.png" title="">

                                    <img src="theme/images/tmp/diplom-1.png" alt=""/>

                                </a>



                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/diplom-2.png" title="">

                                    <img src="theme/images/tmp/diplom-2.png" alt=""/>

                                </a>



                                <a class="fancybox" rel="gallery1" href="theme/images/tmp/diplom-3.png" title="">

                                    <img src="theme/images/tmp/diplom-3.png" alt=""/>

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>

        <section class="section-review">

            <div class="site-container">

                <h3>отзывы</h3>



                <div class="flexslider review-slider">

                    <ul class="slides">

                        <li>

                            <div class="item">

                                <div class="left-part">

                                    <div class="img">

                                        <img src="theme/images/tmp/re-img-1.jpg" alt=""/>

                                    </div>

                                    <div class="stars">

                                        <img src="theme/images/tmp/stars.png" alt=""/>

                                    </div>

                                </div>

                                <div class="right-part">

                                    <p>

                                        Очень доволен проделанной работой. Сначала были сомнения - а не пожалею ли я в будущем? Но то, каким

                                        получился

                                        результат, просто поразил меня! Передо мной стоял истинный красавец, а не та тачка, на которой я гонял 5

                                        лет.

                                        Спасибо, ребята!

                                    </p>

                                    <span class="name">Роман Абрамович</span>

                                </div>

                            </div>

                        </li>

                        <li>

                            <div class="item">

                                <div class="left-part">

                                    <div class="img">

                                        <img src="theme/images/tmp/re-img-1.jpg" alt=""/>

                                    </div>

                                    <div class="stars">

                                        <img src="theme/images/tmp/stars.png" alt=""/>

                                    </div>

                                </div>

                                <div class="right-part">

                                    <p>

                                        Очень доволен проделанной работой. Сначала были сомнения - а не пожалею ли я в будущем? Но то, каким

                                        получился

                                        результат, просто поразил меня! Передо мной стоял истинный красавец, а не та тачка, на которой я гонял 5

                                        лет.

                                        Спасибо, ребята!

                                    </p>

                                    <span class="name">Роман Абрамович</span>

                                </div>

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </section>



        <section class="section-bg section-bg-2">

            <div class="transform-inner">



            </div>

        </section>



        <section class="section-form">

            <div class="site-container">

                <h3>заявка на стайлинг</h3>



                <form class="form">

                    <div class="form-type-text">

                        <input type="text" placeholder="Ваше Имя"/>

                    </div>



                    <div class="form-type-text">

                        <input type="text" placeholder="Ваша фамилия"/>

                    </div>



                    <div class="form-type-text">

                        <input type="text" placeholder="Ваш E-mail"/>

                    </div>



                    <div class="btn-wrapp style-c">

                        <input type="submit" class="btn" value="записаться"/>

                    </div>

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



                <p>Ниже вы можете посмортеть список, ближайших к вам, студий нашей компании</p>



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

                <h3>Франшиза</h3>



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

                    <a href="#" class="btn">Заведи успешный бизнес</a>

                </div>





            </div>

        </section>



        <section class="section-bg section-map">



        </section>

    </div>





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

                <li><a href="#"></a></li>

                <li><a href="#"></a></li>

                <li><a href="#"></a></li>

            </ul>



            <p>партнеры для кросс-продвижения</p>

            <ul class="partners">

                <li><a href=""><img src="theme/images/tmp/logo-1.png" alt=""/></a></li>

                <li><a href=""><img src="theme/images/tmp/logo-2.png" alt=""/></a></li>

                <li><a href=""><img src="theme/images/tmp/logo-3.png" alt=""/></a></li>

                <li><a href=""><img src="theme/images/tmp/logo-4.png" alt=""/></a></li>

                <li><a href=""><img src="theme/images/tmp/logo-5.png" alt=""/></a></li>

                <li><a href=""><img src="theme/images/tmp/logo-6.png" alt=""/></a></li>

            </ul>



            <ul class="menu">

                <li><a href="#">заявка на стайлинг</a></li>

                <li><a href="#">партнерство</a></li>

                <li><a href="#">индивидуальный дизайн</a></li>

                <li><a href="#">оклейка по выезду</a></li>

                <li><a href="#">подписаться на новости</a></li>

            </ul>



            <span class="copy">Copyright 2016 название компании. Все права защищены</span>

        </div>



    </footer>

</div>