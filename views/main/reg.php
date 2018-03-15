<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.04.2017
 * Time: 16:22
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var $this yii\web\View
 * @var $model app\models\RegForm
 * @var $form ActiveForm
 */
//$this->registerCssFile('@web/css/materialize.css');

?>
<div class="main-reg container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username',['options'=>['class'=>'modal-sm']]) ?>
    <?= $form->field($model, 'email',['options'=>['class'=>'modal-sm']])->input('email') ?>
    <?= $form->field($model, 'password',['options'=>['class'=>'modal-sm']])->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- main-reg -->