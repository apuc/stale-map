<?php
/**
 * @var $work common\models\db\GalleryWork
 */
$this->title = $work->name;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $work->meta_description,
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' =>$work->meta_keywords ,
]);

?>

<!-- Place somewhere in the <body> of your page -->
<div id="project__slider" class="flexslider project__slider">
    <ul class="slides">

        <?php foreach($work['gallery_work_img'] as $item): ?>
            <li>
                <img src="<?= $item->img?>" />
            </li>
        <?php endforeach; ?>

        <!-- items mirrored twice, total of 12 -->
    </ul>
</div>

<!-- open .magenta -->
<section class="block-magenta project__media">
    <!-- open .site-container -->
    <div class="site-container">

        <div id="project__carousel" class="flexslider project__carousel">
            <ul class="slides">
                <?php foreach($work['gallery_work_img'] as $item): ?>
                    <li>
                        <img src="<?= $item->img?>" />
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php if(!empty($work->link_video)):?>

        <!-- open .project__media_videobox -->
        <div class="project__media_videobox">
            <iframe width="100%" height="100%" src="<?= $work->link_video; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- close .project__media_videobox -->
        <?php endif; ?>
    </div>
    <!-- close .site-container -->
</section>
<!-- close .magenta -->

<!-- open .block-blue -->
<section class="block-blue project__content">
    <!-- open .site-container -->
    <div class="site-container">
        <!-- open .questionary__staps_iconbox -->
        <!-- close .questionary__staps_iconbox -->
        <p><?= $work->description; ?></p>
    </div>
    <!-- close .site-container -->
</section>
<!-- close .block-blue -->

<!-- open .block-skyline -->
<section class="block-skyline">

</section>
<!-- close .block-skyline -->
