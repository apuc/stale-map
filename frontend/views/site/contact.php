<?php


/* @var $phone common\models\db\ContactPhone */
/* @var $model common\models\db\ContactPage */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- open .contacts__head -->
<section class="contacts__head"></section>
<!-- close .contacts__head -->

<section class="block-magenta gallery__box">
    <!-- open .site-container -->
    <div class="site-container">
        <h3>Контакты</h3>
        <!-- open .contacts__map -->
        <div class="contacts__map">
            <!-- open #map_canvas -->
            <div id="map_canvas"></div>
            <!-- close #map_canvas -->
        </div>
        <!-- close .contacts__map -->
        <!-- open .contacts__info -->
        <div class="contacts__info">
            <p><?= $model->address; ?></p>
            <?php foreach ($phone as $item): ?>
                <p>Тел: <span class="contacts_item"><?= $item->phone; ?></span></p>
            <?php endforeach; ?>

            <p>WhatsApp: <span class="contacts_item"><?= $model->whats_app;?></span></p>
            <p>Почта: <span class="contacts_item"><?= $model->email; ?></span></p>
        </div>
        <!-- close .contacts__info -->
        <h4>Мы можем сделать проект любой сложности <br />с любым транспортным средством</h4>
    </div>
</section>

<!-- open .block-blue contacts__links -->
<section class="block-blue contacts__links">
    <!-- open .stile-container -->
    <div class="site-container">
        <h3>Соц сети</h3>
        <a href="<?= $model->link_inst; ?>" class="contacts__links_item"><span class="icon icon-ig"></span></a>
        <a href="<?= $model->link_vk; ?>" class="contacts__links_item"><span class="icon icon-vk"></span></a>
        <a href="<?= $model->link_fb; ?>" class="contacts__links_item"><span class="icon icon-fb"></span></a>
    </div>
    <!-- close .stile-container -->
</section>
<!-- close .block-blue contacts__links -->

<?= \frontend\widgets\RequestStyling::widget(); ?>