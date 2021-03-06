<?php
use yii\bootstrap\Carousel;
use yii\bootstrap\Html;
use yii\helpers\Url;

?>
<div class="slider">


    <?php echo Carousel::widget([
        'items' => [
            [
                    'content'=>'<a href="'. Url::to('/main/choose_tour') .'">'.Html::img(['@web/image/slider/1.jpg']).'</a>',
                    'caption'=>'<h1>Изысканный Лондон</h1><p><h4>Столица Великобритании, город-достопримечательность и оплот английских традиций, Лондон (London) — самое популярное направление британской «экскурсионки». И это несмотря на ощутимую дороговизну направления и очевидную скромность большинства отелей. Увидеть королевских гвардейцев и услышать бой Биг-Бена, покормить воронов в Тауэре и обозреть город с «Лондонского глаза» — вот обязательные занятия столичных экскурсантов (как и традиционный «пятничный стаканчик» в до отказа забитых пабах Сохо).</h4></p>',
            ],
            [
                    'content' => '<a href="'. Url::to('/main/choose_tour') .'">'. Html::img(['@web/image/slider/2.jpg']).'</a>',
                    'caption' => '<h1>Сказочное Бали</h1><h4>Бали – знаменитый остров в Индонезии, легендарный тропический курорт. Говорят, когда-то своим домом его выбрали сами боги. И прошло немало веков прежде чем они решили открыть этот райский уголок людям. Удивительно, как на такой небольшой площади (всего 5780 км.кв.) сосредоточено столько фантастических красот: белоснежные пляжи, джунгли, саванны, национальные парки, высокогорные леса с кристально-чистыми озерами, дремлющие вулканы, шумящие водопады и термальные источники. А еще на острове с древности сохранилось 20 000 дворцов и храмов. Здесь властвует своя собственная религия – «балийский индуизм». Вообщем, если говорить о Бали в двух словах – это царство экзотики, самобытных легенд и уникальной истории. Остров таит в себе множество сюрпризов и тайн. Поверьте: на Бали вас ждет одно из самых ярких путешествий в жизни.</h4>',
            ],
            [
                    'content' => '<a href="'. Url::to('/main/choose_tour') .'">'. Html::img(['@web/image/slider/3.jpg']).'</a>',
                    'caption' => '<h1>Солнечный ГОА</h1><h4>Южный Гоа – это то место на земле, которое просто предназначено для отдыха на пляже. Здесь расположены самые лучшие пляжи всего Гоа с потрясающим белоснежным песком, растущими пальмами и другими экзотическими деревьями, тянущимися вдоль всей береговой линии. Дополняет картину вода кристальной чистоты. В Южного Гоа сосредоточенны сетевые отели и отели бизнес-класса.</h4>>'
            ],
            [
                    'content' => '<a href="'. Url::to('/main/choose_tour') .'">'. Html::img(['@web/image/slider/4.jpg']).'</a>',
                    'caption' =>'<h1>Великолепный Нью-Йорк</h1><h4>Нью-Йорк (New-York City, NY) — крупный мегаполис Соединенных Штатов Америки. Один из самых знаменитых городов страны. В Нью-Йорке находится большинство известных достопримечательностей, как архитектурных — Эмпайр-Стейт-Билдинг, Флэтайрон-билдинг, Крайслер-Билдинг, так и популярных улиц — Бродвей и Пятая Авеню.</h4>'
            ],
            [
                    'content' => '<a href="'. Url::to('/main/choose_tour') .'">'. Html::img(['@web/image/slider/5.jpg']).'</a>',
                    'caption' => '<h1>Зеленая Новая Зеландия</h1><h4>Новая Зеландия славится своей шикарной природой — гейзерами, горами и озерами, лесами и гротами, ледниками и пляжами. Широко развитое экологическое движение позволяет сохранить все это великолепие в почти первозданном состоянии, даже в районах крупных городов.</h4>'
            ],
            [
                'content' => '<a href="'. Url::to('/main/choose_tour') .'">'. Html::img(['@web/image/slider/6.jpg']).'</a>',
                'caption' => '<h1>Пляжный Шарм-Эль-Шейх</h1><p><h4>Это не совсем Египет - это Шарм-эль-Шейх, самый современный и динамично развивающийся курорт Синайского полуострова. Здесь раскинулись многочисленные отели, торговые центры, рестораны, объединившиеся во всемирно известный город-курорт.Шарм-эль-Шейх - идеальное место для отдыха российских туристов: цены здесь весьма доступны, сервис в отелях достаточно высок, всего 4 часа лету, а теплый и сухой климат располагает к отдыху круглый год.</h4></p>',
            ],
        ],
        'options' => ['class' => 'carousel slide', 'data-interval' => '5000'],
        'controls' => [
            '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
            '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
        ]
    ]);
    ?>
</div>
