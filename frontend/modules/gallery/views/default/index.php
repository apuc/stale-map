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

<?php
use common\classes\S;
$this->title = S::get('title_gallery');
$this->registerMetaTag([
    'name' => 'description',
    'content' => S::get('desc_gallery'),
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' =>S::get('key_gallery') ,
]);
?>

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
    <a class="gallery-carousel__title" href="<?= \yii\helpers\Url::to(['view', 'slug' => $work[0]->slug]) ?>"><?= $work[0]->name; ?> </a>
</div>
<!-- close .gallery-wrap -->


<!-- open .magenta -->
<div class="content-wrapper">
<section class="block-magenta gallery__box section-gallery">

    <!-- open .site-container -->
    <div class="site-container">

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
                        <a class="showPhoto" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" data-id="<?= $item->id; ?>" href="#" title="">
                            <img src="<?= $item->thumb ?>" alt=""/>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
</div>
<?= \frontend\widgets\RequestStyling::widget(); ?>

<?= \frontend\widgets\ShowReviews::widget(); ?>