<?php
use yii\widgets\ListView;

/* @var $dataProvider string*/

?>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => '',
    'itemOptions' => ['class' => 'item'],
    'itemView' => function ($model) {
        return $this->render('search_country',[
            'model' => $model
        ]);
    },
]) ?>
