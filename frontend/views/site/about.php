<?php
/**
 * @var $about common\models\db\About
 * @var $work common\models\db\GalleryWork
 * @var $aboutImg common\models\db\AboutPhoto
 * @var $diplom common\models\db\Diplom
 */

use yii\helpers\Html;

$this->title = $about->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $about->meta_description,
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' =>$about->meta_keywords ,
]);

?>

<!-- open .magenta -->
<section class="block-magenta about-info">
    <!-- open .site-container -->
    <div class="site-container">
        <h3><?= Html::encode($this->title) ?></h3>
        <!-- open .about-info__content -->
        <article class="about-info__content">
            <!-- open .about-info__content_preview -->
            <div class="about-info__content_preview">
                <p><?= $about->short_description; ?></p>
            </div>
            <!-- close .about-info__content_preview -->
            <!-- open .about-info__content_all -->
            <div class="about-info__content_all">
                <p><?= $about->description; ?></p>
            </div>
            <!-- close .about-info__content_all -->
            <a href="#" class="about-info__content_toggle">Полная история...</a>
        </article>
        <!-- close .about-info__content -->
    </div>
    <!-- close .site-container -->
</section>
<!-- close .magenta -->

<!-- open .block-black about-masterpieces -->
<section class="block-black about-masterpieces">
    <!-- open .site-content -->
    <div class="site-container">
        <h3>Фото наших шедевров</h3>
        <!-- open .about-masterpieces__carousel -->
        <div class="about-masterpieces__carousel">
            <?php foreach($work as $item): ?>
                <a href="<?= $item['gallery_work'][0]->thumb; ?>" class="about-masterpieces__carousel_item fancybox" title="<a href='#'><?= $item['gallery_work'][0]->name; ?></a>" rel="gallery_masterpieces">
                    <img src="<?= $item['gallery_work'][0]->thumb; ?>" alt="<?= $item['gallery_work'][0]->name; ?>" />
                </a>
            <?php endforeach; ?>

        </div>
        <!-- close .about-masterpieces__carousel -->
    </div>
    <!-- close .site-content -->
</section>
<!-- close .block-black about-masterpieces -->

<?= \frontend\widgets\ShowDiplom::widget(); ?>

<!-- open .about-exhibition -->
<section class="about-exhibition">
    <!-- open .site-container -->
    <div class="site-container">
        <h3>Фото с выставок<br />и наших движений</h3>
        <!-- open .about-exhibition__carousel -->
        <div class="about-exhibition__carousel">
            <?php foreach($aboutImg as $item): ?>
                <a href="<?= $item->img; ?>" class="about-masterpieces__carousel_item fancybox" rel="gallery_exhibition">
                    <img src="<?= $item->img; ?>" alt="" />
                </a>
            <?php endforeach; ?>
        </div>
        <!-- close .about-exhibition__carousel -->
    </div>
    <!-- close .site-container -->
</section>
<!-- close .about-exhibition -->

<?= \frontend\widgets\ShowReviews::widget(); ?>