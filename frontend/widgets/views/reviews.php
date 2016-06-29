<section class="float-box section-review">
    <div class="site-container">
        <h3>отзывы</h3>
        <div class="flexslider flexslider_main review-slider">
            <ul class="slides">
                <?php foreach($reviews as $review): ?>
                    <li>
                        <div class="item">
                            <div class="left-part">
                                <div class="img">
                                    <img src="<?= $review->img; ?>" alt=""/>
                                </div>
                                <div class="stars">
                                    <img src="img/tmp/stars.png" alt=""/>
                                </div>
                            </div>
                            <div class="right-part">
                                <p>
                                    <?= $review->text; ?>
                                </p>
                                <span class="name"><?= $review->name; ?></span>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<!-- open .block-skyline -->
<section class="block-skyline">

</section>
<!-- close .block-skyline -->