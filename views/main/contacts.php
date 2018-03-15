<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 02.05.2017
 * Time: 9:27
 */
use yii\bootstrap\Html;
use yii\bootstrap\Modal;
?>
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="img_loc">
            <?= Html::img('@web/image/location.jpg') ?>
            </div>
            </div>
        <div class="col-md-8">
            <h4 id="phones">
                <b><h2 id="header_contacts"><b>Наши офисы в Украине:</b></h2></b>

                <p>г.Запорожье , пр.Соборный 223</p>
                <p>г.Днепр , пр.Карла-Маркса 21</p>
                <p>г.Киев , ул.Украинская 13</p>
                <b><p><b><h2 id="header_contacts">Главный офис:</h2></b></p></b>
                <p>США, Айова ave.Railroad 12</p>
                <div class="phones">
                    <p>
                        <b>
                        <p><h2 id="header_contacts">Телефоны по Украине:</h2></p>
                        <div class="main_phone">+38(612)345-67-89</div><br>
                        <div class="vodafone_phone">+38(066)345-67-89</div><br>
                        <div class="kyivstar_phone">+38(067)345-67-89</div>
                        </b>
                    </p>
                </div>
                <div class="work_time">
                <p><b><h2 id="header_contacts">Время работы:</h2></b></p>
                <p><b>Понедельник: </b>8.00-20.00</p>
                <p><b>Вторник:     </b>8.00-20.00</p>
                <p><b>Среда:       </b>8.00-20.00</p>
                <p><b>Четверг:     </b>8.00-20.00</p>
                <p><b>Пятница:     </b>8.00-20.00</p>
                <p><b>Суббота:     </b>8.00-20.00</p>
                <p><b>Воскресенье: </b>Выходной</p>
                </div>

            </h4>
        </div>
    </div>
</div>
<div class="image_location">

</div>



