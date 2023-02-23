<?php
// Balise ouvrante de contenu HTML,
//  pour la page layout.php  
ob_start();
?>

<!-- Home START  -->
<section id="home">
	<div class="home-container ">

		<!-- Slider main container -->
		<div class="swiper">

			<div class="main-slider__shape-1"></div>
			<div class="main-slider__shape-2"></div>
			<div class="main-slider__shape-3"></div>
			<div class="main-slider__shape-4"></div>

			<div class="swiper-wrapper">
				<!-- Slide 1 -->
				<div class="swiper-slide">
					<div class="home-image-1"></div>
					<div class="image-overlay"></div>
					<div class="container position-relative">
						<div class="row">
							<div class="col-lg-10 mx-auto position-relative">
								<div class="home-content position-relative">
									<div class="fw-bold fs-6" data-aos="fade-down" data-aos-duration="1200">
										SOURIEZ ! RESPIREZ !</div>
									<h2 class="fw-bold fs-3 mt-5 ls-1" data-aos="fade-up" data-aos-duration="1200">
										Le bonheur n'est pas une destination mais une façon de voyager !
									</h2>
									<a href="about.php" class="thm-btn white bg-blue" data-aos="fade-up" data-aos-duration="1200">
										<span>Qui suis-je ?</span>
									</a>

									<!-- Navigation buttons -->
									<div class="slider-navigation position-absolute d-flex justify-content-start">
										<div class="swiper-button-prev">
											<div class="button-prev" id="main-slider__swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-bf75eb0c11829243">
												<span class="fa-solid fa-arrow-left"></span>
											</div>
										</div>
										<div class="swiper-button-next">
											<div class="button-next" id="main-slider__swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-bf75eb0c11829243">
												<span class="fa-solid fa-arrow-right"></span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide 2  -->
				<div class="swiper-slide">
					<div class="home-image-2"></div>
					<div class="image-overlay"></div>
					<div class="container position-relative">
						<div class="row">
							<div class="col-lg-10 mx-auto">
								<div class="home-content">
									<div class="fw-bold fs-6" data-aos="fade-down" data-aos-duration="1200">SOURIEZ ! RESPIREZ !</div>
									<h2 class="fw-bold fs-3 mt-5 ls-1" data-aos="fade-up" data-aos-duration="1200">
										Le bonheur n'est pas une destination mais une façon de voyager !
									</h2>
									<a href="about.php" class="thm-btn white bg-blue" data-aos="fade-up" data-aos-duration="1200">
										<span>Qui suis-je ?</span>
									</a>

									<!-- Navigation buttons -->
									<div class="slider-navigation position-absolute d-flex justify-content-start">
										<div class="swiper-button-prev">
											<div class="button-prev" id="main-slider__swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-bf75eb0c11829243">
												<span class="fa-solid fa-arrow-left"></span>
											</div>
										</div>
										<div class="swiper-button-next">
											<div class="button-next" id="main-slider__swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-bf75eb0c11829243">
												<span class="fa-solid fa-arrow-right"></span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide 3  -->
				<div class="swiper-slide">
					<div class="home-image-3"></div>
					<div class="image-overlay"></div>
					<div class="container position-relative">
						<div class="row">
							<div class="col-lg-10 mx-auto">
								<div class="home-content">
									<div class="fw-bold fs-6" data-aos="fade-down" data-aos-duration="1200">SOURIEZ ! RESPIREZ !</div>
									<h2 class="fw-bold fs-3 mt-5 ls-1" data-aos="fade-up" data-aos-duration="1200">
										Le bonheur n'est pas une destination mais une façon de voyager !
									</h2>
									<a href="about.php" class="thm-btn white bg-blue" data-aos="fade-up" data-aos-duration="1200">
										<span>Qui suis-je ?</span>
									</a>

									<!-- Navigation buttons -->
									<div class="slider-navigation position-absolute d-flex justify-content-start">
										<div class="swiper-button-prev">
											<div class="button-prev" id="main-slider__swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-bf75eb0c11829243">
												<span class="fa-solid fa-arrow-left"></span>
											</div>
										</div>
										<div class="swiper-button-next">
											<div class="button-next" id="main-slider__swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-bf75eb0c11829243">
												<span class="fa-solid fa-arrow-right"></span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Home END  -->


<!-- About START  -->
<section id="about" class="about py-120">
	<div class="container">
		<div class="row">

			<!-- About image  -->
			<div class="col-xl-6">
				<div class="position-relative about-image-block d-block w-80 mt-40" data-aos="fade-right">
					<div class="position-relative d-block">
						<div class="rounded-circle position-relative d-block overflow-hidden">
							<img src="../assets/images/rachel-lthk.png" class="w-100">
							</img>
							<div class="about-shape-1"></div>
							<div class="about-shape-2"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- About content  -->
			<div class="welcome-one__right aboutContent col-xl-6 mt-4">
				<div class="section-title">
					<span class="section-title__tagline text-muted ms-4 d-block" data-aos="fade-right">
						Qui suis-je ?
					</span>
					<h2 class="section-title__title fsize-52 fw-bold" data-aos="fade-right">La tribu happy kids</h2>
				</div>
				<p class="welcome-one__right-text-1 fw-normal fsize-18 lheight-0 pt-10 pe-30" data-aos="fade-up">
					Rachel, orthophoniste libérale et maman de deux happy kids. Je suis
					l'auteure de deux livres : " Mon petit kit de Médiation
					Emotionnelle" et "Mon petit kit Respire et souffle!" ainsi que "Les
					routines OMF" que vous pouvez retrouver dans l'onglet "Boutique".
					<br>
					<br>
					La tribu happy kids est une aventure en AUTO-ÉDITION, tous les
					produits sont pensés, élaborés, préparés et envoyés par mes petites
					mains et avec beaucoup d’amour et de paillettes !
					<br>
					<br>
					Je tiens également le compte instagram
					<a href="https://www.instagram.com/latribuhappykids/" target="_blank" class="insta-link lightPurple">@latribuhappykids</a>
					:<br>
					<br>
					La Tribu Happy Kids est une communauté de spécialistes de l'enfance
					et de mamans avec qui je partage mes astuces d'orthophonistes, des
					activités de relaxation, des jeux autour des émotions ainsi que ma
					passion pour mon metier ! ✌
					<br>
					<br>
					<a href="about.php" class="thm-btn white bg-peach" data-aos="fade-up">
						<span>Qui suis-je ?</span></a>
				</p>
			</div>

		</div>
	</div>
</section>
<!-- About END -->

<!-- Shop START -->
<section id="shop" class="py-100">
	<div class="container">

		<!-- Shop title  -->
		<div class="section-title text-center pb-40">
			<span class="section-title__tagline text-muted d-block" data-aos="fade-right">
				Boutique
			</span>
			<h2 class="text-center h1" data-aos="fade-right">Nos produits</h2>
		</div>

		<!-- Shop products  -->
		<div class="row" data-aos="fade-up">
			<!-- Bouclage de l'affichage des produits -->
			<?php
			if ($products) {
				foreach ($products as $product) {
			?>
					<div class="col-md-6 col-lg-3 ">
						<div class="shopArticle h-100 d-flex flex-column">
							<div class="position-relative shop-article__image">
								<?php if ($product->status ?? null) { ?>
									<span class="category position-absolute top-0 end-0 px-2 white bg-dark z-10 fsize-12 fw-bold lheight-1 lspacing-1 text-uppercase"><?= $product->status ?></span>
								<?php } ?>
								<img src="../assets/images/<?= $product->image ?>" class="w-100 bradius-10 transition-500" alt="">
								<a href="index.php?action=productdetails&id=<?= $product->id ?>" class="thm-btn addCart"><span>Voir</span></a>
							</div>
							<div class="text-center d-flex flex-column flex-grow-1">
								<a href="index.php?action=productdetails&id=<?= $product->id ?>" class="shop-title__link lightDark">
									<h3 class="shopTitle mt-20 fsize-22 fw-bold"><?= $product->name ?></h3>
								</a>
								<p class="text-muted mt-auto"><?= $product->price ?>€</p>
							</div>
						</div>
					</div>
			<?php
				}
			}
			?>
		</div>

	</div>
</section>
<!-- Shop END -->

<!-- Services START -->
<section id="services" class="pt-140 pb-80 bg-lightGrey">
	<div class="container">

		<!-- Services title  -->
		<div class="section-title text-center pb-40">
			<span class="section-title__tagline text-muted d-block" data-aos="fade-right">
				Entrez dans la tribu !
			</span>
			<h2 data-aos="fade-right" class="mb-5">Mes services</h2>
		</div>

		<!-- Service 1  -->
		<div class="row mt-5">
			<div class="col-lg-4 col-xl-4" data-aos="fade-up">
				<div class="service bg-white position-relative bradius-15 h-85 mt-10 mx-10 mb-80 pt-10 px-20 pb-50">
					<img class="card-img-top bradius-50-percent position-relative start-50-percent top-0 translate-middle" src="../assets/images/service-lthk-1.png" alt="Card image cap" />
					<div class="card-body text-center d-block mb-40 lheight-36">
						<h3 class="card-title fw-bold">BOUTIQUE EN LIGNE</h3>
						<p class="card-text text-muted fsize-20 m-10">
							Livres numériques à télécharger, Kits (livres version papier +
							accessoires) sur la respiration, le souffle et la relaxation,
							Jeux sur les émotions et la relaxation... Des outils précieux
							d'éveil au bien-être pour nos enfants à retrouver dans la
							boutique !
						</p>
					</div>
				</div>
			</div>

			<!-- Service 2  -->
			<div class="col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="100">
				<div class="service bg-white position-relative bradius-15 h-85 mt-10 mx-10 mb-80 pt-10 px-20 pb-50 ">
					<img class="card-img-top bradius-50-percent position-relative start-50-percent top-0 translate-middle" src="../assets/images/service-lthk-2.png" alt="Card image cap" />
					<div class="card-body text-center d-block mb-40 lheight-36">
						<h3 class="card-title fw-bold">RESSOURCES GRATUITES</h3>
						<p class="card-text text-muted fsize-20 m-10">
							Mon objectif : Vous accompagner avec bienveillance (et un peu de
							fun, de licorne et de paillettes!!) dans la parentalité zen, et
							le bien être émotionnel de vos kids avec mes astuces zen, mes
							histoires de relaxation et mes articles de prévention en
							orthophonie à retrouver sur le compte instagram, le blog et la
							boutique ( pdf gratuits à télécharger en ligne).
						</p>
					</div>
				</div>
			</div>

			<!-- Service 3  -->
			<div class="col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
				<div class="service bg-white position-relative bradius-15 h-85 mt-10 mx-10 mb-80 pt-10 px-20 pb-50">
					<img class="card-img-top bradius-50-percent position-relative start-50-percent top-0 translate-middle" src="../assets/images/service-lthk-3.png" alt="Card image cap" />
					<div class="card-body text-center d-block mb-40 lheight-36">
						<h3 class="card-title fw-bold">
							ATELIER D'ÉVEIL AU BIEN-ÊTRE
						</h3>
						<p class="card-text text-muted fsize-20 m-10">
							Chaque premier mercredi du mois, La tribu happy kids vous
							retrouve lors de ses ateliers d'Eveil-bien-être à partir de 4
							ans.
							<br>
							Je vous reçois également dans mon cabinet en tant
							qu'orthophoniste pour la prise en soin des troubles
							oromyo-fonctionnels et du bégaiement.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Services END -->

<!-- Blog START -->
<section id="blog" class="py-140">
	<div class="container">

		<!-- Blog title  -->
		<div class="section-title text-center pb-40">
			<span class="section-title__tagline text-muted d-block" data-aos="fade-right">
				Les derniers articles de la tribu !
			</span>
			<h2 data-aos="fade-right">Blog</h2>
		</div>

		<!-- Blog articles  -->
		<div class="row">
			<!-- Bouclage de l'affichage des articles de blog  -->
			<?php
			if ($posts) {
				foreach ($posts as $post) {
			?>
					<div class="col-lg-4 col-xl-4 mb-50" data-aos="fade-up">
						<div class="blog-article position-relative bradius-10 p-0 m-0 d-flex justify-content-between flex-column h-100 ">

							<div class="position-relative d-block">
								<div class="blog-image position-relative rounded-top">
									<img class="w-100" src="../assets/images/<?= $post->image ?>" />
									<a href="blog-details.php?id=<?= $post->id ?>" class="position-absolute top-0 end-0 bottom-0 start-0 d-flex justify-content-center align-items-center rounded top transition-500">
										<span class="position-relative cross"></span>
									</a>
								</div>
								<div class="blog-date d-block bradius-10 py-20 px-15 text-center white bg-blue position-absolute" data-aos="fade-left">
									<p class="fsize-10 fw-bold m-0 lheight-14 px-20 py-2"><span class="d-block fsize-16"><?= $post->day ?></span>
										<?= $post->month ?>
									</p>
								</div>
							</div>

							<div>
								<div class="card-body px-3 m-4 mt-5">
									<div>
										<a class="card-title dark transition-500 " href="blog-details.php?id=<?= $post->id ?>">
											<h3 class="fw-bold"><?= $post->title ?></h3>
										</a>
										<br>
										<p class="card-text mb-5 text-secondary text-left fsize-20">
											<?= $post->resume ?>
										</p>
									</div>
									<div class="blog-footer d-flex justify-content-between mt-50 pt-10 border-top">
										<div data-aos="fade-left">
											<a class="mt-20 fw-bold lightPurple" href="blog-details.php?id=<?= $post->id ?>">Lire</a>
										</div>
										<div data-aos="fade-right">
											<a class="mt-20 fw-bold lightPurple" href="blog-details.php?id=<?= $post->id ?>"><span class="fa-solid fa-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
			<?php
				}
			}
			?>
		</div>

	</div>
</section>
<!-- Blog END -->

<?php
// Balise fermante de contenu HTML incluse dans 
// la fonction de switch pour le template de disposition 
userLayoutSwitch('Accueil - La Tribu Happy Kids'); ?>