<?php
/**
 * @var $blog common\models\db\Blog
 * @var $limit integer
 * @var $page integer
 * @var $blogCount integer
 */

use common\classes\S;

$this->title = S::get('title_blog');
$this->registerMetaTag([
    'name' => 'description',
    'content' => S::get('desc_blog'),
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' =>S::get('key_blog') ,
]);
?>

<section class="blog">
    <div class="site-container">
        <?php
        foreach($blog as $item):?>
            <div class="blogWr">
                <img src="<?= $item->images; ?>" alt="<?= $item->title; ?>">
                <div class="title"><a href="<?= \yii\helpers\Url::to(['view','slug' => $item->slug]) ?>"><?= $item->title; ?></a></div>
                <div class="shortdesc"><?= $item->short_description; ?></div>
            </div>
        <?php endforeach; ?>


         <?php if (($limit * $page) < $blogCount): ?>

            <div class="space--more">
                <a href="#" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" id="more-news" data-count="<?= $page; ?>">Загрузить еще</a>
            </div>
            <span class="ajaxNews"></span>
        <?php endif; ?>
    </div>
</section>


<!-- open .magenta -->
<section class="block-magenta news-box">
    <!-- open .site-container -->
    <div class="site-container">
        <h3>Новости</h3>

        <!-- open .news-box__wrap -->
        <div class="news-box__wrap wall" >
            <?php
            foreach($blog as $item):?>

                <a href="<?= \yii\helpers\Url::to(['view','slug' => $item->slug]) ?>" class="news-box__item">
				<span class="news-box__item_thumb">
					<img src="<?= $item->images; ?>" alt="<?= $item->title; ?>" />
				</span>

                    <strong><?= $item->title; ?></strong>
                    <p><?= $item->short_description; ?></p>
                </a>
            <?php endforeach; ?>

        </div>
        <!-- close .news-box__wrap -->

        <?php if (($limit * $page) < $blogCount): ?>
            <a href="#" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" id="more-news" data-count="<?= $page; ?>" class="news-box__more"><span class="icon icon-dots"></span></a>

            <span class="ajaxNews"></span>
        <?php endif; ?>



        <h4>Мы можем сделать проект любой сложности <br />с любым транспортным средством</h4>
    </div>
</section>
<!-- close .magenta -->