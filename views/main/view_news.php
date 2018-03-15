<?php

/* @var $model app\models\News*/



?>
<div class="news">

    <div class="news_title" align="center"><b><?= $model->title ?></b></div></div>
    <br>
    <div class="news_image">
        <?php
        $image = $model->getImage($model->id);
        ?>
        <img src="<?= $image->getUrl('250x250'); ?>" alt="">
    </div>
    <div class="news-description"><?= $model->description ?></div>
    <hr>
</div>
