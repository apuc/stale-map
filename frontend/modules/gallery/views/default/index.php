<!--<section class="section-gallery gallerypage" id="gallery">

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
                    <?php /*foreach($category as $item): */?>
                        <button data-filter=".group-<?/*= $item->id */?>"><?/*= $item->name; */?></button>
                    <?php /*endforeach; */?>
                </div>
                <div class="grid">
                    <?php /*foreach ($work as $item): */?>
                        <div class="element-item transition
                        <?php /*foreach ($item['gallery_work'] as $i): */?>
                        group-<?/*= $i->category_id*/?>
                        <?php /*endforeach */?>
                        ">
                            <a class="fancybox" rel="gallery1" href="<?/*= $item->thumb */?>" title="">
                                <img src="<?/*= $item->thumb */?>" alt=""/>
                            </a>
                        </div>
                    <?php /*endforeach; */?>
                </div>
            </div>
        </div>
    </div>
</section>-->



<!-- open .gallery-wrap -->
<div class="gallery-wrap">
    <!-- open .gallery-carousel -->
    <div class="gallery-carousel">

        <?php foreach ($imgOneWork as $item): ?>
            <!-- open .gallery-carousel__item -->
            <div class="gallery-carousel__item">
                <img src="<?= $item->img; ?>" alt="" />
            </div>
            <!-- close .gallery-carousel__item -->
        <?php endforeach; ?>
    </div>
    <!-- close .gallery-carousel -->
    <a class="gallery-carousel__title" href="#"><?= $work[0]->name; ?> </a>
</div>
<!-- close .gallery-wrap -->


<!-- open .magenta -->
<section class="block-magenta gallery__box">

    <!-- open .site-container -->
    <div class="site-container">
        <!-- open .gallery-tabs -->
        <div class="gallery__tabs">
            <ul>

                <li><a href="#" class="gallery__tabs_switch" data-flag="all">ВСЕ</a></li>
                <?php foreach($category as $item): ?>
                <li>
                    <a href="#" class="gallery__tabs_switch" data-flag="gallery_group_<?= $item->id ?>"><?= $item->name; ?></a>
                </li>

                <?php endforeach; ?>
            </ul>
        </div>
        <!-- close .gallery-tabs -->

        <!-- open .gallery__previews -->
        <div class="gallery__previews">

            <?php foreach ($work as $item): ?>

            <!-- open .gallery__previews_item -->
            <a href="#" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" data-id="<?= $item->id; ?>" class="showPhoto gallery__previews_item
                    <?php foreach ($item['gallery_work'] as $i): ?>
                        gallery_group_<?= $i->category_id?>
                    <?php endforeach ?>
            ">
                <img src="<?= $item->thumb ?>" alt="" />
            </a>

            <?php endforeach; ?>




        </div>
        <!-- close .gallery__previews -->


        <!--<a href="#" class="news-box__more"><span class="icon icon-dots"></span></a>-->


        <h4>Мы можем сделать проект любой сложности <br />с любым транспортным средством</h4>
    </div>
</section>

<?= \frontend\widgets\RequestStyling::widget(); ?>

<?= \frontend\widgets\ShowReviews::widget(); ?>