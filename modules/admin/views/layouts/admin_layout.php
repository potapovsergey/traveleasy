<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.05.2017
 * Time: 16:31
 */

use app\assets\AppAsset;
use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/**
 * @var $content string
 * @var $this \yii\web\View
 * @var $dataProvider yii\data\ActiveDataProvider
 */

AppAsset::register($this);
$this->registerCss('body { background-color: white; }');
$this->beginPage();
?>
    <!doctype html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Yii::$app->name ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <? $this->beginBody(); ?>
    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'Travel Easy Administrator',
            'brandUrl' => ['/admin/default'],
            'id' => 'nav-admin',
            'options' => [
                'class' => '',
            ],
        ]);
        $menuItems[] = ['label' => 'Главная',
                        'url' => ['/main/index'],
                        'linkOptions' => ['data-method' => 'post']
        ];
        $menuItems[] = ['label' => 'Туры',
            'url' => ['/admin/tour/index'],
            'linkOptions' => ['data-method' => 'post']
        ];
        $menuItems[] = ['label' => 'Новости',
            'url' => ['/admin/news/index'],
            'linkOptions' => ['data-method' => 'post']
        ];
        $menuItems[] = ['label' => 'Страны',
            'url' => ['/admin/country/index'],
            'linkOptions' => ['data-method' => 'post']
        ];
        $menuItems[] = ['label' => 'Тип',
            'url' => ['/admin/type-tour/index'],
            'linkOptions' => ['data-method' => 'post']
        ];
        $menuItems[] = ['label' => 'Заказы',
            'url' => ['/admin/order/index'],
            'linkOptions' => ['data-method' => 'post']
        ];
        $menuItems[] = [
            'label' => '<span class="glyphicon glyphicon-user"></span>',
            'items' => [
                '<li class="dropdown-header">' . Yii::$app->user->identity['username'] . '</li>',
                '<li class="divider"></li>',
                [
                    'label' => 'На главную',
                    'url' => ['/main/index'],
                    'linkOptions' => ['data-method' => 'post']
                ],

                [
                    'label' => '<span class="glyphicon glyphicon-log-out"></span> Выход',
                    'url' => ['/main/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ]
                ]
            ];
        echo Nav::widget([
            'items' => $menuItems,
            'encodeLabels' => false,
            'options' => [
                'class' => 'navbar-nav navbar-right'
            ]
        ]);
        NavBar::end();
        ?>
        <div class="container">
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
    <? $this->endBody(); ?>
    </body>
    </html>
<? $this->endPage(); ?>