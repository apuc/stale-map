<div class="gallery-carousel">

    <?php foreach ($img as $item): ?>
        <!-- open .gallery-carousel__item -->
        <div class="gallery-carousel__item">
            <img src="<?= $item->img; ?>" alt="" />
        </div>
        <!-- close .gallery-carousel__item -->
    <?php endforeach; ?>
</div>
<a class="gallery-carousel__title" href="#"><?= $work->name; ?> </a>