<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<section id="wrapper">
    <div class="envelope">
        <header class="header">
            <div class="headerNav">
                <ul class="center">
                    <li>
                        <a href="">О компании</a>
                    </li>
                    <li>
                        <a href="">Вахтовые поселки</a>
                    </li>
                    <li>
                        <a href="">Продукция</a>
                        <div class="headerSubNav">
                            <ul>
                                <li>
                                    <a href="">
                                        <p>
                                            промышленое и строительное
                                            <br/>
                                            направление
                                        </p>
                                    </a>
                                    <div class="headerSubMenu">
                                        <ul>
                                            <li>
                                                <a href="">Склад</a>
                                            </li>
                                            <li>
                                                <a href="">Столовые</a>
                                            </li>
                                            <li>
                                                <a href="">Бытовка</a>
                                            </li>
                                            <li>
                                                <a href="">Котельная</a>
                                            </li>
                                            <li>
                                                <a href="">Производственный цех</a>
                                            </li>
                                            <li>
                                                <a href="">Сантехнический блок</a>
                                            </li>
                                            <li>
                                                <a href="">Прорабка</a>
                                            </li>
                                            <li>
                                                <a href="">Водоочистка</a>
                                            </li>
                                            <li>
                                                <a href="">Бокс для техниики</a>
                                            </li>
                                            <li>
                                                <a href="">Прачечная</a>
                                            </li>
                                            <li>
                                                <a href="">Мобильный офис</a>
                                            </li>
                                            <li>
                                                <a href="">Блок-модуль</a>
                                            </li>
                                            <li>
                                                <a href="">Общежитие</a>
                                            </li>
                                            <li>
                                                <a href="">КПП</a>
                                            </li>
                                            <li>
                                                <a href="">Пункт обогрева</a>
                                            </li>
                                            <li>
                                                <a href="">Холодильные камеры</a>
                                            </li>
                                            <li>
                                                <a href="">Административно-бытовой комплекс</a>
                                            </li>
                                            <li>
                                                <a href="">Сушильная</a>
                                            </li>
                                            <li>
                                                <a href="">Офисное здание</a>
                                            </li>
                                            <li>
                                                <a href="">Аренда бытовок</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <p>
                                            торговое
                                            <br/>
                                            направление
                                        </p>
                                    </a>
                                    <div class="headerSubMenu">
                                        <ul>
                                            <li>
                                                <a href="">Торговый павильон </a>
                                            </li>
                                            <li>
                                                <a href="">Торговые комплексы под ключ</a>
                                            </li>
                                            <li>
                                                <a href="">Магазин</a>
                                            </li>
                                            <li>
                                                <a href="">Мини-маркет</a>
                                            </li>
                                            <li>
                                                <a href="">Торговый комплекс</a>
                                            </li>
                                            <li>
                                                <a href="">Супермаркет </a>
                                            </li>
                                            <li>
                                                <a href="">Мини-рынок</a>
                                            </li>
                                            <li>
                                                <a href="">Холодильные камеры</a>
                                            </li>
                                            <li>
                                                <a href="">Торговые ряды</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <p>
                                            агропромышленое
                                            <br/>
                                            направление
                                        </p>
                                    </a>
                                    <div class="headerSubMenu">
                                        <ul>
                                            <li>
                                                <a href="">Овощехранилище</a>
                                            </li>
                                            <li>
                                                <a href="">Свиноферма</a>
                                            </li>
                                            <li>
                                                <a href="">Производственный цех</a>
                                            </li>
                                            <li>
                                                <a href="">Зернохранилище</a>
                                            </li>
                                            <li>
                                                <a href="">Птицеферма</a>
                                            </li>
                                            <li>
                                                <a href="">Котельная </a>
                                            </li>
                                            <li>
                                                <a href="">Цех убоя КРС/МРС</a>
                                            </li>
                                            <li>
                                                <a href="">АБК</a>
                                            </li>
                                            <li>
                                                <a href="">Водоочистка</a>
                                            </li>
                                            <li>
                                                <a href="">Торгово-молочная ферма</a>
                                            </li>
                                            <li>
                                                <a href="">Бокс для техники</a>
                                            </li>
                                            <li>
                                                <a href="">Холодильные камеры</a>
                                            </li>
                                            <li>
                                                <a href="">Коровник</a>
                                            </li>
                                            <li>
                                                <a href="">Ангар</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">Технологии</a>
                    </li>
                    <li>
                        <a href="">Объекты</a>
                    </li>
                    <li>
                        <a href="">Документы</a>
                    </li>
                    <li>
                        <a href="">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="header_content">
                <div class="center">
                    <div class="logo">
                        <a href="#">
                            <img src="/img/logo.png" alt=""/>
                        </a>
                    </div>
                    <div class="header_tel">
                        <p>8 800 250-96-46 <span>+7 3812 590-103</span></p>
                        <a href="">Заказать звонок</a>
                    </div>
                    <div class="header_btn">
                        <a class="btn makeOrder" href="">сделать заказ</a>
                        <a class="btn calculateCost" href="">рассчитать стоимость</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrap">
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>
<footer class="footer">
    <div class="container">
        <div class="center">
            <a class="footerLogo" href="">
                <img src="/img/footerLogo.png" alt=""/>
            </a>
            <div class="footerTel">
                <p class="footerTel_number">8 800 250-96-46</p>
                <p class="footerTel_number">+7 3812 590-103</p>
                <a class="footerTel_link" href="">Заказать звонок</a>
            </div>
            <div class="copyright">© 2016 «АРТА»</div>
            <div class="footerNav">
                <div class="footerProducts">
                    <div class="footerProducts_title">Продукция:</div>
                    <ul>
                        <li>
                            <a href="">
                                Промышленность
                                <br/>
                                и строительство
                            </a>
                        </li>
                        <li>
                            <a href="">Торговля</a>
                        </li>
                        <li>
                            <a href="">Агрокомплекс</a>
                        </li>
                    </ul>
                </div>
                <div class="footerProducts">
                    <ul>
                        <li>
                            <a href="">Вахтовые поселки</a>
                        </li>
                        <li>
                            <a href="">Технологии</a>
                        </li>
                        <li>
                            <a href="">Объекты</a>
                        </li>
                        <li>
                            <a href="">Полезные статьи</a>
                        </li>
                        <li>
                            <a href="">О компании</a>
                        </li>
                        <li>
                            <a href="">Документы</a>
                        </li>
                        <li>
                            <a href="">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_btn">
                <a class="btn makeOrder" href="">сделать заказ</a>
                <br/>
                <a class="btn calculateCost" href="">рассчитать стоимость</a>
            </div>
            <a class="logo_ferma" href="http://fermastudio.com/" target="_blank">cоздание сайта</a>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
