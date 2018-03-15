<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeTour */

$this->title = 'Update Type Tour: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Type Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-tour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
