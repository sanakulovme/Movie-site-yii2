<?php

/** @var yii\web\View $this */

$this->title = 'uzmovie.com Kinoteatiri';
?>
<!-- home -->
    <section class="home">
        <!-- home bg -->
        <div class="owl-carousel home__bg">
            <div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
            <div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
            <div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
            <div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
        </div>
        <!-- end home bg -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="home__title">Yangi filimlar</h1>

                    <button class="home__nav home__nav--prev" type="button">
                        <i class="icon ion-ios-arrow-round-back"></i>
                    </button>
                    <button class="home__nav home__nav--next" type="button">
                        <i class="icon ion-ios-arrow-round-forward"></i>
                    </button>
                </div>

                <div class="col-12">
                    <div class="owl-carousel home__carousel">
                        <?php foreach ($forCarusel as $item): ?>
                        <div class="item">
                            <!-- card -->
                            <div class="card card--big">
                                <div class="card__cover">
                                    <img src="/uploads/photos/<?= $item->photo ?>" alt="">
                                    <a href="/play/<?= $item->slag ?>" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="#"><?= $item->title ?></a></h3>
                                    <span class="card__category">
                                        <a href="/janr/<?= strtolower($item->genre->title) ?>"><?= $item->genre->title ?></a>
                                        <a href="/country/<?= $item->country->title ?>"><?= strtoupper($item->country->title) ?></a><br>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item->star ?></span>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- content -->
    <section class="content">
        <div class="content__head">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- content title -->
                        <h2 class="content__title">PREMYERALAR</h2>
                        <!-- end content title -->

                        <!-- content tabs nav -->
                        <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">FILM YANGILIKLARI</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">FILIMLAR</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">MULTFILIMLAR</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">SERIALLAR</a>
                            </li>
                        </ul>
                        <!-- end content tabs nav -->

                        <!-- content mobile tabs nav -->
                        <div class="content__mobile-tabs" id="content__mobile-tabs">
                            <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="New items">
                                <span></span>
                            </div>

                            <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

                                    <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>

                                    <li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>

                                    <li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end content mobile tabs nav -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- content tabs -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                    <div class="row">
                       <?php $limit = 1; foreach ($data as $item): ?>
                           <div class="col-6 col-sm-12 col-lg-6">
                            <div class="card card--list">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="card__cover">
                                            <img src="/uploads/photos/<?= $item->photo ?>" alt="">
                                            <a href="/play/<?= $item->slag ?>" class="card__play">
                                                <i class="icon ion-ios-play"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-8">
                                        <div class="card__content">
                                            <h3 class="card__title"><a href="#"><?= $item->title ?></a></h3>
                                            <span class="card__category">
                                                <a href="janr/<?= strtolower($item->genre->title) ?>"><?= $item->genre->title ?></a>
                                                <a href="/country/<?= $item->country->title ?>"><?= strtoupper($item->country->title) ?></a>
                                            </span>

                                            <div class="card__wrap">
                                                <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item->star ?></span>

                                                <ul class="card__list">
                                                    <li><?= $item->format ?></li>
                                                </ul>
                                            </div>

                                            <div class="card__description">
                                                <p><?= $item->desc ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php if ($limit == 6) {break;}else{$limit++;} endforeach ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
                    <div class="row">
                        <?php $limit = 1; foreach ($data as $item): ?>
                           <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="/uploads/photos/<?= $item->photo ?>" alt="">
                                    <a href="/play/<?= $item->slag ?>" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="#"><?= $item->title ?></a></h3>
                                    <span class="card__category">
                                        <a href="janr/<?= strtolower($item->genre->title) ?>"><?= $item->genre->title ?></a>
                                        <a href="/country/<?= $item->country->title ?>"><?= strtoupper($item->country->title) ?></a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item->star ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                       <?php if ($limit == 12) {break;}else{$limit++;} endforeach ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
                    <div class="row">
                        <?php foreach ($multiData as $item): ?>
                           <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="/uploads/photos/<?= $item->photo ?>" alt="">
                                    <a href="/play/<?= $item->slag ?>" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="#"><?= $item->title ?></a></h3>
                                    <span class="card__category">
                                        <a href="janr/<?= strtolower($item->genre->title) ?>"><?= $item->genre->title ?></a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item->star ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                       <?php endforeach ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
                    <div class="row">
                        <?php foreach ($sData as $item): ?>
                           <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="/uploads/photos/<?= $item->photo ?>" alt="">
                                    <a href="/play/<?= $item->slag ?>" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="#"><?= $item->title ?></a></h3>
                                    <span class="card__category">
                                        <a href="janr/<?= strtolower($item->genre->title) ?>"><?= $item->genre->title ?></a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item->star ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                       <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!-- end content tabs -->
        </div>
    </section>
    <!-- end content -->

    <!-- expected premiere -->
    <section class="section section--bg" data-bg="img/section/section.jpg">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title">MULTIFILIMLAR</h2>
                </div>
                <!-- end section title -->

                <?php foreach ($multiData as $item): ?>
                           <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="/uploads/photos/<?= $item->photo ?>" alt="">
                                    <a href="/play/<?= $item->slag ?>" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="#"><?= $item->title ?></a></h3>
                                    <span class="card__category">
                                        <a href="janr/<?= strtolower($item->genre->title) ?>"><?= $item->genre->title ?></a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item->star ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                       <?php endforeach ?>


                <!-- section btn -->
                <div class="col-12">
                    <a href="/catalog/multfilimlar" class="section__btn">KO'PROQ KO'RISH</a>
                </div>
                <!-- end section btn -->
            </div>
        </div>
    </section>
    <!-- end expected premiere -->
