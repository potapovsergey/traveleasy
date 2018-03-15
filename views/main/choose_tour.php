<?php
use yii\widgets\ListView;
use yii\bootstrap\Html;
use yii\bootstrap\Modal;
/* @var $dataProvider string*/
/* @var $searchModel string*/
?>

    <div>

        <div>

            <?php Modal::begin([
                'header' => '<h2>Поиск</h2>',
                'toggleButton' => [
                    'tag' => 'button',
                    'class' => 'btn btn-search',
                    'label' => Html::img('@web/image/search.png'),
                ],
                'size' => 'modal-lg',
                'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button> 
                '
            ]);

            echo $this->render('search_model',['model'=>$searchModel]);

            Modal::end();
            ?>
    </div>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model) {
            return $this->render('view_tour',[
                'model' => $model
            ]);
        },
    ]) ?>



