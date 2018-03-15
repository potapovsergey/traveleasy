<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.04.2017
 * Time: 16:22
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
/**
 * @var $this yii\web\View
 * @var $model app\models\Order
 * @var $form ActiveForm
 */
//Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
//    'css' => [],
//];
//$this->registerCssFile('@web/css/materialize.css');

?>
<div class="main-login container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name',['options'=>['class'=>'modal-sm']]) ?>
    <?= $form->field($model, 'second_name',['options'=>['class'=>'modal-sm']]) ?>
    <?= $form->field($model, 'middle_name',['options'=>['class'=>'modal-sm']]) ?>
    <?= $form->field($model, 'passport_ser',['options'=>['class'=>'modal-sm']]) ?>
    <?= $form->field($model, 'passport_num',['options'=>['class'=>'modal-sm']]) ?>
    <?= $form->field($model, 'address',['options'=>['class'=>'modal-sm']]) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        <a class="btn btn-info btn-reg-on" href="<?= Url::to('/main/reg')?>">Зарегистрироватся</a>
    </div>
    <?php ActiveForm::end(); ?>
    
</div><!-- main-login -->