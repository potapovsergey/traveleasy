<?php

use app\models\TypeTour;
use app\models\Country;
/* @var $model app\models\Tour*/
$type_id = TypeTour::findOne($model->type_id);
$country = Country::findOne($model->country_id);

?>

<div class="tour-all" data-id="<?= $model->id ?>">
    <div class="row">
        <div class="col-md-4">
            <div class="tour_image">
                <?
                $image = $model->getImage($model->id);
                ?>
                <img src="<?= $image->getUrl('300x200'); ?>" alt="">
            </div>
        </div>
        <div class="col-md-7">
            <div class="struct_tour">
                <ul>
                    <li><b>Название: </b><?= $model->title ?></li>
                    <li><b>Тип транспорта: </b><?= $type_id->title ?></li>
                    <li><b>Страна: </b><?= $country->title ?></li>
                    <li><b>Цена: </b><?= $model->price ?>$</li>
                </ul>
            </div>
        </div>
        <div class="col-md-1">
            <li>
                <div class="tour_type">
                    <?
                    $image = $type_id->getImage($model->type_id);
                    ?>
                    <img src="<?= $image->getUrl('40x40'); ?>" alt="">
                </div>
            </li>
            <li>
                <div class="tour_country">
                    <?
                    $image = $country->getImage($model->country_id);
                    ?>
                    <img src="<?= $image->getUrl('45x25'); ?>" alt="">
                </div>
            </li>
        </div>


    </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="text_header">
                        <h1><b>Описание тура:</b></h1>
                    </span>
                </div>
            </div>
            <div class="row">
            <div class="col-md-11">
                <div class="tour_description_view"> <?= $model->description ?></div>
            </div>
        </div>
    </div>

</div>

<div class="btn-order">
    <a class="btn btn-default order_tour" data-id="<?=$model->id ?>">Заказать</a>
</div>