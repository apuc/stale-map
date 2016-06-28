<section class="blog">
    <div class="site-container">

<?php foreach ($cooperation as $item): ?>
    <div class="cooperationWr">
        <div class="cooperationImg">
            <img src="<?= $item->img; ?>" alt="">
        </div>
        <div class="cooperationNmame">
            <?= $item->name?>
        </div>
        <div class="cooperationText">
            <?= $item->text?>
        </div>
    </div>
<?php endforeach; ?>
        <div class="cleared"></div>

        <div class="btn-wrapp style-a"><a class="btn" href="">Стать партнером</a></div>
    </div>

    
</section>


