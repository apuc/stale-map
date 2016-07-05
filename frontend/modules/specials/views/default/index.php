<?php
/**
 * @var $spNew common\models\db\Specials
 * @var $spParent common\models\db\Specials
 * @var $spNewsUsl common\models\db\Specials
 * @var $page
 */


use common\classes\S;

$this->title = S::get('title_specials');
$this->registerMetaTag([
    'name' => 'description',
    'content' => S::get('desc_specials'),
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' =>S::get('key_specials') ,
]);

?>

<section class="block-magenta specials">
    <!-- open .site-container -->
    <div class="site-container">
        <h3>Спецпредложения</h3>
        <div class="price__wrap">
            <!-- open .specials__column -->
            <div class="specials__column">
                <h4>Новые дизайны</h4>

                <?php foreach($spNew as $item): ?>
                    <!-- open .specials__item -->
                    <div class="specials__item">
                        <a href="#">
                            <img src="<?= $item->img; ?>" alt="<?= $item->title; ?>" class="specials__item_thumb" />
                            <strong><?= $item->title; ?></strong>
                        </a>
                        <p><?= $item->short_description; ?> </p>
                    </div>
                    <!-- close .specials__item -->
                <?php endforeach;?>

                <a href="#" class="news-box__more" data-type="1" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" data-count="<?=$page?>" ><span class="icon icon-dots"></span></a>
            </div>
            <!-- close .specials__column -->
            <!-- open .specials__column -->
            <div class="specials__column">
                <h4>Акции филиалов</h4>

                <?php foreach($spParent as $item): ?>
                    <!-- open .specials__item -->
                    <div class="specials__item">
                        <a href="#">
                            <img src="<?= $item->img; ?>" alt="<?= $item->title; ?>" class="specials__item_thumb" />
                            <strong><?= $item->title; ?></strong>
                        </a>
                        <p><?= $item->short_description; ?> </p>
                    </div>
                    <!-- close .specials__item -->
                <?php endforeach; ?>


                <a href="#" class="news-box__more" data-type="2" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" data-count="<?=$page?>"><span class="icon icon-dots"></span></a>
            </div>
            <!-- close .specials__column -->
            <!-- open .specials__column -->
            <div class="specials__column">
                <h4>Новинки услуг</h4>
                <?php foreach($spNewsUsl as $item): ?>
                    <!-- open .specials__item -->
                    <div class="specials__item">
                        <a href="#">
                            <img src="<?= $item->img; ?>" alt="<?= $item->title; ?>" class="specials__item_thumb" />
                            <strong><?= $item->title; ?></strong>
                        </a>
                        <p><?= $item->short_description; ?> </p>
                    </div>
                    <!-- close .specials__item -->
                <?php endforeach; ?>
                <a href="#" class="news-box__more" data-type="3" data-csrf="<?= Yii::$app->request->getCsrfToken() ?>" data-count="<?=$page?>"><span class="icon icon-dots"></span></a>
            </div>
            <!-- close .specials__column -->
        </div>
    </div>
    <!-- close .site-container -->
</section>
<!-- open .block-skyline -->
<section class="block-skyline"></section>
<!-- close .block-skyline -->
