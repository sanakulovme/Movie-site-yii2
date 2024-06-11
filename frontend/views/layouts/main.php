<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use frontend\models\Country;
use frontend\models\Janr;
use frontend\models\Catalog;

\frontend\assets\AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- header -->
    <header class="header">
        <div class="header__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__content">
                            <!-- header logo -->
                            <a href="/" class="header__logo">
                                <img src="/img/logo.svg" alt="">
                            </a>
                            <!-- end header logo -->

                            <!-- header nav -->
                            <ul class="header__nav">
                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MAMLAKAT</a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
                                        <?php foreach (Country::find()->all() as $item): ?>
                                        <li><a href="/country/<?= $item->title ?>"><?= strtoupper($item->title) ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                        <?php foreach (Catalog::find()->all() as $item): ?>
                                        <li><a href="/catalog/<?= $item->title ?>"><?= strtoupper($item->title) ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Janr</a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                        <?php foreach (Janr::find()->all() as $item): ?>
                                        <li><a href="/janr/<?= $item->title ?>"><?= strtoupper($item->title) ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <!-- end dropdown -->
                                <li class="header__nav-item">
                                    <a href="/news" class="header__nav-link">YANGILIKLAR</a>
                                </li>
                                <!-- dropdown -->
                                <li class="dropdown header__nav-item">
                                    <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                        <?php if (Yii::$app->user->isGuest): ?>
                                        <li><a href="/site/login">Kirish</a></li>
                                        <li><a href="/site/signup">Ro'yxatdan o'tish</a></li>
                                        <?php else: ?>
                                            <?php
                                    echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                                        . Html::submitButton(
                                            'Logout (' . Yii::$app->user->identity->username . ')',
                                            ['style' => 'color: #fff;']
                                        )
                                        . Html::endForm();
                                    ?>
                                        <?php endif ?>
                                    </ul>
                                </li>
                                <!-- end dropdown -->
                            </ul>
                            <!-- end header nav -->

                            <!-- header auth -->
                            <div class="header__auth">
                                <button class="header__search-btn" type="button">
                                    <i class="icon ion-ios-search"></i>
                                </button>
                                <?php if (Yii::$app->user->isGuest): ?>
                                <a href="/site/login" class="header__sign-in">
                                    <i class="icon ion-ios-log-in"></i>
                                    <span>Kirish</span>
                                </a>
                                <?php else: ?>
                                <a href="#" class="header__sign-in">
                                    <?php
                                    echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                                        . Html::submitButton(
                                            'Logout (' . Yii::$app->user->identity->username . ')',
                                            ['style' => 'color: #fff;']
                                        )
                                        . Html::endForm();
                                    ?>
                                </a>
                                <?php endif ?>
                            </div>
                            <!-- end header auth -->

                            <!-- header menu btn -->
                            <button class="header__btn" type="button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- end header menu btn -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header search -->
        <form action="/search" class="header__search" method="get">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__search-content">
                            <input type="text" name="q" placeholder="Search for a movie, TV Series that you are looking for">

                            <button type="submit">search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end header search -->
    </header>
    <!-- end header -->

<main role="main">
    <?= $content ?>
</main>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- footer list -->
                <div class="col-12 col-md-3">
                    <h6 class="footer__title">Download Our App</h6>
                    <ul class="footer__app">
                        <li><a href="#"><img src="img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/google-play-badge.png" alt=""></a></li>
                    </ul>
                </div>
                <!-- end footer list -->

                <!-- footer list -->
                <div class="col-6 col-sm-4 col-md-3">
                    <h6 class="footer__title">Resources</h6>
                    <ul class="footer__list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Pricing Plan</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <!-- end footer list -->

                <!-- footer list -->
                <div class="col-6 col-sm-4 col-md-3">
                    <h6 class="footer__title">Legal</h6>
                    <ul class="footer__list">
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <!-- end footer list -->

                <!-- footer list -->
                <div class="col-12 col-sm-4 col-md-3">
                    <h6 class="footer__title">Contact</h6>
                    <ul class="footer__list">
                        <li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
                        <li><a href="mailto:support@moviego.com">support@flixgo.com</a></li>
                    </ul>
                    <ul class="footer__social">
                        <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                        <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                        <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                        <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                    </ul>
                </div>
                <!-- end footer list -->

                <!-- footer copyright -->
                <div class="col-12">
                    <div class="footer__copyright">
                        <small><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></small>

                        <ul>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end footer copyright -->
            </div>
        </div>
    </footer>
    <!-- end footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
