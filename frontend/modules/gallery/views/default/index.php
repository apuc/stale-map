<section class="section-gallery gallerypage" id="gallery">

    <div class="transform-inner">

        <div class="site-container">

            <h3>Галерея</h3>
            <div class="text">
                <p>
                    Галерея с нашими проектами постоянно обновляется
                    Здесь представлена коллекция лучших примеров работ нашей команды
                </p>
            </div>
            <div class="gallery">
                <?/*= \common\classes\Debug::prn($work);  */?>

                <div class="button-group filter-button-group">
                    <button data-filter="*">Все</button>
                    <?php foreach($category as $item): ?>
                        <button data-filter=".group-<?= $item->id ?>"><?= $item->name; ?></button>
                    <?php endforeach; ?>
                    <!--<button data-filter="*">Все</button>
                    <button data-filter=".group-1">винилография</button>
                    <button data-filter=".group-2">обтяжка</button>
                    <button data-filter=".group-3">брендирование</button>
                    <button data-filter=".group-4, .group-2">мотостайлинг</button>
                    <button data-filter=".group-5">остальное</button>-->
                </div>
                <div class="grid">
                    <?php foreach ($work as $item): ?>
                        <div class="element-item transition
                        <?php foreach ($item['gallery_work'] as $i): ?>
                        group-<?= $i->category_id?>
                        <?php endforeach ?>
                        ">
                            <a class="fancybox" rel="gallery1" href="<?= $item->thumb ?>" title="">
                                <img src="<?= $item->thumb ?>" alt=""/>
                            </a>
                        </div>
                    <?php endforeach; ?>

                    <!--<div class="element-item transition group-1 group-2">
                        <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-1.jpg" title="">
                            <img src="theme/images/tmp/g-item-1.jpg" alt=""/>
                        </a>
                    </div>

                    <div class="element-item transition group-1">
                        <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-2.jpg" title="">
                            <img src="theme/images/tmp/g-item-2.jpg" alt=""/>
                        </a>
                    </div>

                    <div class="element-item  group-2">
                        <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-3.jpg" title="">
                            <img src="theme/images/tmp/g-item-3.jpg" alt=""/>
                        </a>
                    </div>

                    <div class="element-item  group-2">
                        <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-4.jpg" title="">
                            <img src="theme/images/tmp/g-item-4.jpg" alt=""/>
                        </a>
                    </div>

                    <div class="element-item  group-2">
                        <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-5.jpg" title="">
                            <img src="theme/images/tmp/g-item-5.jpg" alt=""/>
                        </a>
                    </div>

                    <div class="element-item  group-3">
                        <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-6.jpg" title="">
                            <img src="theme/images/tmp/g-item-6.jpg" alt=""/>
                        </a>
                    </div>

                    <div class="element-item transition group-4">
                        <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-7.jpg" title="">
                            <img src="theme/images/tmp/g-item-7.jpg" alt=""/>
                        </a>
                    </div>

                    <div class="element-item transition group-5">
                        <a class="fancybox" rel="gallery1" href="theme/images/tmp/g-item-8.jpg" title="">
                            <img src="theme/images/tmp/g-item-8.jpg" alt=""/>
                        </a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>