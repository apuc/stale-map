<?php

/**
 * @var $service common\models\db\Services
 * @var $servicesAll common\models\db\Services
 * @var $benefit
 */
$this->title  = $service->title;
?>

<!-- open .services -->
<div class="services">
    <!-- open .site-container -->
    <div class="site-container">
        <!-- open .services__nav -->
        <nav class="services__nav">
            <ul>
                <?php
                $i = 1;
                foreach($servicesAll as $serv):
                   // \common\classes\Debug::prn($serv->slug);
                    ?>
                    <?php if($i == 6): ?>
                        <li><a class="services__nav_dropped" href="#">другое <span class="caret_light"></span></a>
                            <ul>
                    <?php endif;?>

                                <li <?= ($serv->slug == $_GET['slug']) ? 'class="services__nav_active"' : '' ?>>
                                    <a href="<?= \yii\helpers\Url::to(['/services/' . $serv->slug]); ?>"><?= $serv->title; ?></a>
                                </li>

                    <?php if( $i == count($servicesAll) ): ?>
                            </ul>
                        </li>
                    <?php endif;?>
                    <?php $i++; ?>
                <?php endforeach; ?>

            </ul>
        </nav>
        <!-- close .services__nav -->
        <!-- open .services__content -->
        <article class="services__content">
            <!-- open .services__content_desc -->
            <div class="services__content_desc">
                <?= $service->description; ?>

                <?php foreach($benefit as $item): ?>
                    <!-- open .services__content_icon -->
                    <div class="services__content_icon"><!-- open .services__content_icon_box -->
                        <div class="services__content_icon_box">
                            <img src="<?= $item['benefit'][0]->img; ?>" alt="" />
                        </div>
                        <!-- close .services__content_icon_box -->
                        <span><?= $item['benefit'][0]->name?></span></div>
                    <!-- close .services__content_icon -->
                <?php endforeach; ?>

            </div>
            <!-- close .services__content_desc -->
            <!-- open .services__content_thumb -->
            <div class="services__content_thumb">
                <img src="<?= $service->img; ?>" alt="" />
            </div>
            <!-- close .services__content_thumb -->
        </article>
        <!-- close .services__content -->
    </div>
    <!-- close .site-container -->
</div>
<!-- close .services -->
<!-- open .services__carousel -->
<div class="services__carousel">
    <?php foreach($img as $item): ?>
        <a href="<?= $item->img;?>" class="services__carousel_item fancybox" rel="gallery_masterpieces"><img src="<?= $item->img;?>" alt="" /></a>
    <?php endforeach;?>
    <!--<a href="img/tmp/prev-2.jpg" class="services__carousel_item fancybox" rel="gallery_masterpieces"><img src="img/tmp/prev-2.jpg" alt="" /></a>
    <a href="img/tmp/prev-1.jpg" class="services__carousel_item fancybox" rel="gallery_masterpieces"><img src="img/tmp/prev-1.jpg" alt="" /></a>
    <a href="img/tmp/prev-1.jpg" class="services__carousel_item fancybox" rel="gallery_masterpieces"><img src="img/tmp/prev-1.jpg" alt="" /></a>
    <a href="img/tmp/prev-1.jpg" class="services__carousel_item fancybox" rel="gallery_masterpieces"><img src="img/tmp/prev-1.jpg" alt="" /></a>
    <a href="img/tmp/prev-1.jpg" class="services__carousel_item fancybox" rel="gallery_masterpieces"><img src="img/tmp/prev-1.jpg" alt="" /></a>
    <a href="img/tmp/prev-1.jpg" class="services__carousel_item fancybox" rel="gallery_masterpieces"><img src="img/tmp/prev-1.jpg" alt="" /></a>-->
</div>
<!-- close .services__carousel -->
<!-- open .services__carousel_bottom -->
<div class="services__carousel_bottom"></div>
<!-- close .services__carousel_bottom -->
