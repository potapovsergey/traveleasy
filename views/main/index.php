<?php
 use yii\widgets\ListView;
use yii\bootstrap\Html;
 /* @var $dataProvider string*/

?>
<div class="block_chevron">
    <span class="search_head_text">
    <span class="glyphicon glyphicon-chevron-up chevron_display_up"></span>
    </span>
    <span class="search_head_text">
<span class="glyphicon glyphicon-chevron-down chevron_display_down"></span>
</span>
</div>
<div class="main-content">
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => '',
    'itemOptions' => ['class' => 'item'],
    'itemView' => function ($model) {
        return $this->render('view_news',[
            'model' => $model
        ]);
    },
]) ?>
</div>
<?php //echo Html::a('Кнопочка',['main/role'])?>