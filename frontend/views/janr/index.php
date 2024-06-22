<?php

$this->title = 'uzmovi.com | '.strtoupper($name).' FILIMLAR';
use yii\widgets\LinkPager;

?>


<!-- home -->
<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="/img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="/img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="/img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="/img/home/home__bg4.jpg"></div>
		</div>
		<!-- end home bg -->

		<?php if (!empty($provider->getModels())): ?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><?= strtoupper($name) ?></h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
						<?php $l = 0; foreach ($provider->getModels() as $item) { if($l == 6){break;} ?>
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
										<a href="/janr/<?= $item->country->title ?>"><?= strtoupper($item->country->title) ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?= $item->star ?></span>
								</div>
							</div>
							<!-- end card -->
						</div>
						<?php $l++; } ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif ?>
</section>
<!-- end home -->
<!-- catalog -->
<div class="catalog">
		<div class="container">
			<?php if (empty($provider->getModels())): ?>
				<h2 style="color: #fff;text-align: center;">Malumotlar topilmadi</h2>
			<?php endif ?>
			<div class="row">
				<?php foreach ($provider->getModels() as $item): ?>
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
								<a href="/janr/<?= strtolower($item->genre->title) ?>"><?= $item->genre->title ?></a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?= $item->star ?></span>
						</div>
					</div>
				</div>
				<!-- end card -->
				<?php endforeach ?>

				<!-- paginator -->
				<div class="col-12">
					<?php
					echo LinkPager::widget([
						'pagination' => $provider->pagination,
						'options' => [
							'class' => 'paginator'
						],
						'pageCssClass' => 'paginator__item',
						'nextPageCssClass' => 'paginator__item paginator__item--next',
						'prevPageCssClass' => 'paginator__item paginator__item--prev',
						'nextPageLabel' => '<i class="icon ion-ios-arrow-forward"></i>',
						'prevPageLabel' => '<i class="icon ion-ios-arrow-back"></i></i>',
						'maxButtonCount' => 4,
						'activePageCssClass' => 'paginator__item--active',
						'disabledListItemSubTagOptions' => ['tag' => 'a']
					]);

					?>
				</div>
				<!-- end paginator -->
			</div>
		</div>
</div>
<!-- end catalog -->