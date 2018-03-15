<?php
/* @var $model \app\models\Order*/

?>
<div class="tour_order">
    <h1>Спасибо за заказ</h1>
    <h2>Ваши данные:</h2>
    <div class="data_user">
            <ul>
                <h3>
                    <li><b>Ф.И.О. :</b><?= $model->second_name?> <?= $model->first_name?> <?= $model->middle_name?></li>
                    <br>
                    <li><b>Паспорт :</b><?= $model->passport_ser?> <?= $model->passport_num?></li>
                    <br>
                    <li><b>Дом. адресс :</b><?= $model->address?></li>
                    <br>
                </h3>
            </ul>

    </div>
    </div>
<h2 id="order_styles">Обратитесь в ближайший офис для дальнейших инструкций</h2>
</div>