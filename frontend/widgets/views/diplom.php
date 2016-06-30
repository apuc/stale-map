<?php
/**
 * @var $diplom common\models\db\Diplom
 */
?>

<!-- open .block-dark -->
<section class="block-dark about-diplomes">
    <!-- open .site-container -->
    <div class="site-container">
        <h3>Дипломы</h3>
        <div class="flexslider flexslider_main diploma-slider">
            <ul class="slides">
                <?php
                $i = 1;
                foreach($diplom as $item):?>
                    <?= ($i == 1) ? '<li>' : ''; ?>
                    <a class="fancybox" rel="gallery1" href="<?= $item->img; ?>" title="">
                        <img src="<?= $item->img; ?>" alt=""/>
                    </a>
                    <?= ($i == 3) ? '</li>' : ''; ?>
                    <?php ($i == 3) ? $i=0 : ''; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- close .site-container -->
</section>
<!-- close .block-dark -->
