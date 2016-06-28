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
    <div class="blogWr">
        <img src="<?= $item->images; ?>" alt="<?= $item->title; ?>">
        <div class="title"><a href="#"><?= $item->title; ?></a></div>
        <div class="shortdesc"><?= $item->short_description; ?></div>
    </div>
<?php endforeach; ?>


<?php if (($limit * $page) < $blogCount): ?>

    <div class="space--more">
        <a href="#" data-csrf="<?= Yii::$app->request->getCsrfToken()?>" id="more-news" data-count="<?= $page; ?>">Загрузить еще</a>
    </div>

<?php endif; ?>