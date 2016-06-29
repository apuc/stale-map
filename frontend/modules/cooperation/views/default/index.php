<section class="block-magenta cooperation">
    <!-- open .site-container -->
    <div class="site-container">
        <h3>С нами Вы увеличите продажи</h3>
        <!-- open .price__wrap -->
        <div class="price__wrap">

            <?php foreach ($cooperation as $item): ?>
                <!-- open .cooperation__item -->
                <div class="cooperation__item">
                    <img src="<?= $item->img; ?>" alt="<?= $item->name?>" class="cooperation__item_icon" />
                    <h4><?= $item->name?></h4>
                    <p><?= $item->text?></p>
                </div>
                <!-- close .cooperation__item -->
            <?php endforeach; ?>
        </div>
        <!-- close .price__wrap -->
        <a href="" class="cooperation__partner-but">стать партнёром</a>
    </div>
</section>

<?= \frontend\widgets\RequestStyling::widget(); ?>