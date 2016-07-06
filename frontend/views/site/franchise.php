<?php
/**
 * @var $model common\models\db\Franchise
 */


$this->title = $model->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->meta_description,
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' =>$model->meta_keywords ,
]);

?>
<!-- open .magenta -->
<section class="block-magenta questionary__form franchise">
    <!-- open .site-container -->
    <div class="site-container">
        <h3><?= $this->title; ?></h3>
        <!-- open .franchise__carousel -->
        <div class="franchise__carousel">
            <img src="/img/tmp/slide.jpg" alt="" />
            <img src="/img/tmp/slide.jpg" alt="" />
            <img src="/img/tmp/slide.jpg" alt="" />
        </div>
        <!-- close .franchise__carousel -->
        <a href="#parent" class="franchise_btn open_modal">получить франчайзинговый пакет </a>
    </div>
    <!-- close .site-container -->
</section>
<!-- close .magenta -->

<!-- open .block-blue -->
<section class="block-blue questionary__staps">
    <!-- open .site-container -->
    <div class="site-container">
        <!-- open .questionary__staps_iconbox -->
        <div class="questionary__staps_iconbox">
            <!-- open .questionary__staps_icon -->
            <div class="questionary__staps_icon">
                <img src="/img/icons/SendFileFilled-100.png" alt="" />
            </div>
            <!-- close .questionary__staps_icon -->
            <!-- open .questionary__staps_icon -->
            <div class="questionary__staps_icon">
                <img src="/img/icons/Office-PhoneFilled-100.png" alt="" />
            </div>
            <!-- close .questionary__staps_icon -->
            <!-- open .questionary__staps_icon -->
            <div class="questionary__staps_icon">
                <img src="/img/icons/Info-Squared-96.png" alt="" />
            </div>
            <!-- close .questionary__staps_icon -->
            <!-- open .questionary__staps_icon -->
            <div class="questionary__staps_icon">
                <img src="/img/icons/Garage-OpenFilled-100.png" alt="" />
            </div>
            <!-- close .questionary__staps_icon -->
            <!-- open .questionary__staps_icon -->
            <div class="questionary__staps_icon">
                <img src="/img/icons/Money-Bag-104.png" alt="" />
            </div>
            <!-- close .questionary__staps_icon -->
        </div>
        <!-- close .questionary__staps_iconbox -->
        <p><?= $model->text; ?></p>
    </div>
    <!-- close .site-container -->
</section>
<!-- close .block-blue -->

<!-- open .block-skyline -->
<section class="block-skyline">

</section>
<!-- close .block-skyline -->