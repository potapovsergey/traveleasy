<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TypeTour */

$this->title = 'Create Type Tour';
$this->params['breadcrumbs'][] = ['label' => 'Type Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-tour-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
