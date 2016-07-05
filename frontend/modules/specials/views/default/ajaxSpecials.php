<?php foreach($sp as $item): ?>
    <!-- open .specials__item -->
    <div class="specials__item">
        <a href="#">
            <img src="<?= $item->img; ?>" alt="<?= $item->title; ?>" class="specials__item_thumb" />
            <strong><?= $item->title; ?></strong>
        </a>
        <p><?= $item->short_description; ?> </p>
    </div>
    <!-- close .specials__item -->
<?php endforeach;?>