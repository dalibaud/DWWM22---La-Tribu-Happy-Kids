<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('ESPACE CLIENT', 'Mes commandes');
?>

<!-- Account START  -->
<section class="account pt-80 pb-120">
	<div class="container">
		<div class="row">

			<?php accountSidebar('return') ?>

			<!-- Account content START  -->
			<div class="col-lg-8 mt-4 ps-3">
				<div class="account-content">

					<div class="account-content__main-title border-bottom-dark pb-20 aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
						<h2 class="fw-bold fs-1">Mon historique de commandes</h2>
					</div>

					<!-- Si des commandes ont été trouvées  -->
					<?php if ($userOrders[0] ?? null) {
						// Bouclage pour l'affichage des commandes 
						foreach ($userOrders as $item) {
							$localDate = dateToFrench($item->date, 'j F Y') ?>

							<div class="account-content__last-order border-all p-20 my-30 bradius-10 overflow-hidden" data-aos="fade-left" data-aos-delay="100" data-aos-duration="400">
								<div class="last-order__content__block d-flex flex-row align-items-center">
									<div class="last-order__product-image px-auto my-auto ms-3 me-5 my-auto" data-aos="fade-right" data-aos-delay="100" data-aos-duration="400">
										<a href="index.php?action=lastorder&order_id=<?= $item->id ?>">
											<img class="product-image w-100 h-auto" src="../assets/images/<?= $item->image ?>" alt="">
										</a>
									</div>

									<div class="account-content__last-order__box">
										<div class="product-label fs-3 fw-bold">
											<a href="index.php?action=lastorder&order_id=<?= $item->id ?>" class="dark transition-300">
												Commande n°<span><?= $item->ref ?></span>
											</a>
										</div>

										<div class="grey fsize-16">
											Commandé le <span><?= $localDate ?></span>
										</div>
										<div class="fw-bold grey mt-3">
											TOTAL :<span class="fw-bold fst-italic dark fsize-20"><?= $item->totalPrice ?> €</span>
										</div>

										<div class="lastOrder__content__blocActions" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
											<div class="last-order__order-details">
												<a href="index.php?action=lastorder&order_id=<?= $item->id ?>" class="thm-btn bg-blue white">
													<span>
														Voir le détail
													</span>
												</a>
											</div>
										</div>
									</div>

								</div>
							</div>
					<?php }
					} ?>

				</div>
			</div>
			<!-- Account content END  -->

		</div>
	</div>
</section>


<?php
// Balise fermante de contenu HTML incluse dans 
// fonction d'affichage du layout user 
userLayout('Mes commandes - La Tribu Happy Kids');
