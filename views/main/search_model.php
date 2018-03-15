<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Country;
use app\models\TypeTour;

/* @var $this yii\web\View */
/* @var $model app\models\TourSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-search">

    <?php $form = ActiveForm::begin([
        'action' => ['choose_tour'],
        'method' => 'get',
    ]); ?>



    <?= $form->field($model, 'title') ?>


    <?=  $form->field($model, 'min_price')->textInput()?>
    <?=   $form->field($model, 'max_price')->textInput()?>

    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(TypeTour::find()->all(), 'id', 'title'),[
        'prompt' => 'Выберете тип тура:'
    ]) ?>
        <?= $form->field($model, 'country_id')->dropDownList(ArrayHelper::map(Country::find()->all(), 'id', 'title'),[
            'prompt' => 'Выберете страну для поиска: '
        ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс фильтра', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
