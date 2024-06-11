<?php


$this->title = 'uzmovi.com | '.strtoupper($name);
use yii\widgets\LinkPager;

?>

<!-- page title -->
<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title"><?= strtoupper($name) ?></h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active"><?= strtoupper($name) ?></li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
</section>
<!-- end page title -->
<!-- filter -->
<div class="filter">
		<div class="container">
			<form>
				<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<!-- filter item -->
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">GENRE:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="text" name="genre" style="width: 90px;" value="<?= isset($_GET['genre']) ? $_GET['genre'] : 'All' ?>">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
									<li>ROMANTIK</li>
									<li>DRAMMA</li>
									<li>KOMEDIA</li>
									<li>JANGARI</li>
									<li>ILMIY</li>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__quality">
								<span class="filter__item-label">QUALITY:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input style="width: 70px;" type="text" name="quality" value="<?= isset($_GET['quality']) ? $_GET['quality'] : 'HD' ?>">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
									<li>HD</li>
									<li>1080</li>
									<li>720</li>
									<li>420</li>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__year">
								<span class="filter__item-label">RELEASE YEAR:</span>

								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<input name="filter__years-start" style="width: 40px; margin-right: 0; text-align: center;" type="text" id="filter__years-start">
										<div style="margin: 0 6px;">|</div>
										<input name="filter__years-end" style="width: 40px; text-align: center;" type="text" id="filter__years-end">
									</div>
									<span></span>
								</div>

								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
									<div id="filter__years"></div>
								</div>
							</div>
							<!-- end filter item -->
						</div>

						<!-- filter btn -->
						<button class="filter__btn" type="submit">apply filter</button>
						<!-- end filter btn -->
					</div>
				</div>
			</div>
			</form>
		</div>
</div>
<!-- end filter -->
<!-- catalog -->
<div class="catalog">
		<div class="container">
				<?php if (empty($provider->getModels())): ?>
					<h2 style="color: #fff; text-align: center;">Malumotlar topilmadi!</h2>
				<?php endif ?>
			<div class="row">

				<?php foreach ($provider->getModels() as $item): ?>
				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/uploads/photos/<?= $item->photo ?>" alt="">
							<a href="/play/<?= $item->video ?>" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?= $item->title ?></a></h3>
							<span class="card__category">
								<a href="/janr/<?= strtolower($item->genre->title) ?>"><?= $item->genre->title ?></a>
								<a href="/country/<?= $item->country->title ?>"><?= strtoupper($item->country->title) ?></a>
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
<!-- expected premiere -->
<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Expected premiere</h2>
				</div>
				<!-- end section title -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/img/covers/cover.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/img/covers/cover3.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Benched</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/img/covers/cover2.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Whitney</a></h3>
							<span class="card__category">
								<a href="#">Romance</a>
								<a href="#">Drama</a>
								<a href="#">Music</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/img/covers/cover6.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Blindspotting</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
								<a href="#">Drama</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/img/covers/cover4.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/img/covers/cover5.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Benched</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- section btn -->
				<div class="col-12">
					<a href="#" class="section__btn">Show more</a>
				</div>
				<!-- end section btn -->
			</div>
		</div>
</section>
<!-- end expected premiere -->