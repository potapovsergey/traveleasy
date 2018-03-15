<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Country;
use app\models\Tour;
use yii\widgets\Pjax;
use yii\bootstrap\ButtonDropdown;






AppAsset::register($this);

$this->beginPage();
$this->title='Travel-Easy';
$model = new Tour();


?>
    <html>
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

<div class="w">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="<?php echo Url::toRoute(['/main/index'])?>"></a>
                    </div>
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
        </div>
    </div>

    <?php
    NavBar::begin([
        'id' => 'main_nav',
        'options' => [
            'class' => 'nav navbar-default',
        ],
    ]);

    $menuItems[] = ['label' => 'Главная','url' => ['/main/index']];
    $menuItems[] = ['label' => 'Подобрать тур','url' => ['/main/choose_tour']];
    $menuItems[] = ['label' => 'О нас','url' => ['/main/about']];
    $menuItems[] = ['label' => 'Контакты','url' => ['/main/contacts']];
    if(Yii::$app->user->can('admin')):
        $menuItems[] = ['label' => 'Панель админиcтратора','url'=>['/admin/default']];
    endif;

    if(Yii::$app->user->isGuest):
        $menuItems[] = [
            'label' => 'Войти',
            'url'=>['/main/login'],
            'options' => [
                'class' => 'btn-log-in'
            ]
        ];

    else:
        $menuItems[] = [
            'label' => '<span class="glyphicon glyphicon-user"></span>',
            'items' => [
                '<li class="dropdown-header">'.Yii::$app->user->identity['username'].'</li>',
                '<li class="divider"></li>',
                [
                    'label' => 'Мой профиль',
                    'url' => ['/user-profile/view/'.Yii::$app->user->identity['id'].''],
                    'linkOptions' => ['data-method' => 'post']
                ],
                [
                    'label' => '<span class="glyphicon glyphicon-log-out"></span> Выход',
                    'url' => ['/main/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],


            ]
        ];

    endif;
    echo Nav::widget([
        'items' => $menuItems,
        'encodeLabels' => false,
        'options' => [
            'class' => 'navbar-nav navbar-left'
        ]
    ]);

    ActiveForm::begin(
        [
            'action' => ['/main/search'],
            'method' => 'get',
            'options' => [
                'class' => 'navbar-form navbar-right'
            ]
        ]
    );
    echo '<div class="input-group input-group-sm">';
    echo Html::input(
        'type: text',
        'search',
        '',
        [
            'placeholder' => 'Введите страну',
            'class' => 'form-control'
        ]
    );
    echo '<span class="input-group-btn">';
    echo Html::submitButton(
        '<span class="glyphicon glyphicon-search"></span>',
        [
            'class' => 'btn btn-info',
            'onClick' => 'window.location.href = this.form.action + "?search=" + this.form.search.value.replace(/[^\w\а-яё\А-ЯЁ]+/g, "_");'
        ]
    );
    echo '</span></div>';
    ActiveForm::end();
    NavBar::end();
    ?>





        <?php
            $url = $_SERVER['REQUEST_URI'];
            if($url ==='/main/index' || $url=='/'):
                echo $this->render('/main/slider');
            endif;
        ?>

    <div class="content">
        <div class="container">



            <div class="col-md-12">

                <div class="main-content">
                    <?= $content ?>
                </div>
                <br>
            </div>


        </div>
    </div>



    <?php  $this->endBody() ?>

    <footer class="footer footer-fix">
        <div class="container">
            <p class="pull-left"><b>&copy; ZNTU <?= date('Y') ?></b></p>

            <p class="pull-right"><?= Yii::powered() ?></p>

        </div>
    </footer>
    </body>
    </html>

<?php

$this->endPage();

?>