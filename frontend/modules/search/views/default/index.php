<?php

use common\classes\Debug;

$this->title = 'Поиск';

//Debug::prn($search);
?>

<!-- open .magenta -->
<section class="block-magenta news-box">
    <!-- open .site-container -->
    <div class="site-container">
        <h3>Поиск</h3>

        <!-- open .news-box__wrap -->

            <?php
            if(!empty($search)) { ?>
        <div class="news-box__wrap wall" >
                <?php
                foreach ($search as $item):?>

                    <a href="<?= \yii\helpers\Url::to(['/blog/' . $item->slug]) ?>" class="news-box__item">
				<span class="news-box__item_thumb">
					<img src="<?= $item->images; ?>" alt="<?= $item->title; ?>"/>
				</span>

                        <strong><?= $item->title; ?></strong>
                        <p><?= $item->short_description; ?></p>
                    </a>
                <?php endforeach;?>
        </div>
            <?php
            }else{
                ?>

                    <h4>Поск не дал результатов</h4>
                <?php
            }?>


        <!-- close .news-box__wrap -->

        <h4>Мы можем сделать проект любой сложности <br />с любым транспортным средством</h4>
    </div>
</section>
<!-- close .magenta -->

<?= \frontend\widgets\RequestStyling::widget(); ?>
