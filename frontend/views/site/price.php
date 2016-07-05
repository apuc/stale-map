<?php
use yii\helpers\Html;

$this->title = 'Прайс';

/*$this->registerMetaTag([
'name' => 'description',
'content' => $about->meta_description,
]);

$this->registerMetaTag([
'name' => 'keywords',
'content' =>$about->meta_keywords ,
]);*/
?>
<section class="block-magenta price">
    <!-- open .site-container -->
    <div class="site-container">
        <h3><?= Html::encode($this->title) ?></h3>

        <!-- open .price__wrap -->
        <div class="price__wrap">
            <?php foreach($model as $item):?>
                <!-- open .price__item -->
                <div class="price__item">
                    <a href="#">
                        <img src="<?= $item->img;?>" alt="" class="price__item_icon" />
                        <h4><?= $item->name; ?></h4>
                    </a>
                    <p><?= $item->description; ?></p>
                    <p><?= $item->value; ?></p>

                    <span class="price__item_price"><strong>Цена: от <?= $item->price; ?>р <?= $item->price_description; ?></strong></span>
                </div>
                <!-- close .price__item -->
            <?php endforeach; ?>


        </div>
        <!-- close .price__wrap -->
    </div>
</section>

<?= \frontend\widgets\RequestStyling::widget(); ?>