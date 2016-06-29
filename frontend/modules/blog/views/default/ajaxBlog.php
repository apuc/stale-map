<?php
/**
 * @var $blog common\models\db\Blog
 * @var $limit integer
 * @var $page integer
 * @var $blogCount integer
 */
?>

<?php
foreach($blog as $item):?>
    <div class="wall-column">
    <a href="<?= \yii\helpers\Url::to(['view','slug' => $item->slug]) ?>" class="news-box__item">
				<span class="news-box__item_thumb">
					<img src="<?= $item->images; ?>" alt="<?= $item->title; ?>" />
				</span>

        <strong><?= $item->title; ?></strong>
        <p><?= $item->short_description; ?></p>
    </a>
    </div>
<?php endforeach; ?>


<?php /*if (($limit * $page) < $blogCount): */?><!--

    <a href="#" data-csrf="<?/*= Yii::$app->request->getCsrfToken()*/?>" id="more-news" data-count="<?/*= $page; */?>" class="news-box__more"><span class="icon icon-dots"></span></a>

--><?php /*endif; */?>