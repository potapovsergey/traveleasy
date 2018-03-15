<?php

use app\models\TypeTour;
use app\models\Country;
use rico\yii2images\models\Image;
/* @var $model app\models\Tour*/
$type_id = TypeTour::findOne($model->type_id);
$country = Country::findOne($model->country_id);

?>

<div class="tour" data-id="<?= $model->id ?>">
    <div class="row">
        <div class="col-md-3">
            <div class="tour_image">
                <?php
                $image = $model->getImage($model->id);
                ?>
                <img src="<?= $image->getUrl('175x175'); ?>" alt="">
            </div>
        </div>
        <div class="col-md-8">
            <div class="struct_tour">
                <ul>
                    <li><b>Название: </b><?= $model->title ?></li>
                    <li><b>Тип: </b><?= $type_id->title ?></li>
                    <li><b>Страна: </b><?= $country->title ?></li>
                    <li><b>Цена: </b><?= $model->price ?>$</li>
                    <li><b>Описание: </b>
                        <div class="tour_description">
                            <?php
                            $desc = $model->description;
                            if(mb_strlen($desc)>130){
                                $text = mb_substr($desc,0,130,'UTF-8');
                                echo $text;
                                echo ' . . .';
                            }
                            else
                                echo $desc;

                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-1">
            <li>
            <div class="tour_type">
                <?php
                $image = $type_id->getImage($model->type_id);
                ?>
                <img src="<?= $image->getUrl('40x40'); ?>" alt="">
            </div>
            </li>
            <li>
            <div class="tour_country">
                <?php
                $image = $country->getImage($model->country_id);
                ?>
                <img src="<?= $image->getUrl('45x25'); ?>" alt="">
            </div>
            </li>
        </div>
    </div>
<div class="row">
    <div class="container">
        <div class="col-md-8">

        </div>
    </div>



</div>

<hr>

</div>

