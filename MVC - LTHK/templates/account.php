<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('ESPACE CLIENT', 'Espace client');
?>

<!-- Account START  -->
<section class="account py-120">
	<div class="container">
		<div class="row">

			<?php accountSidebar() ?>

			<!-- Account content START  -->
			<div class="col-lg-9 mt-4 ps-3">
				<div class="account-content">
					<div class="account-content__main-title border-bottom-dark pb-20 mb-50  aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
						<h2 class="fw-bold fs-1">Ma dernière commande</h2>
					</div>
					<!-- Si au moins une commande a été passée, affichage de la dernière commande,
							 ainsi que le 1er produit de cette commande -->
					<?php if ($lastOrder->id ?? null) { ?>
						<div class="account-content__last-order border-all p-20 bradius-10 overflow-hidden" data-aos="fade-left" data-aos-delay="100" data-aos-duration="400">
							<div class="last-order__content__block d-flex flex-row align-items-center">
								<div class="last-order__product-image px-auto my-auto ms-3 me-5 my-auto" data-aos="fade-right" data-aos-delay="100" data-aos-duration="400">
									<a href="index.php?action=lastorder&order_id=<?= $lastOrder->id ?>">
										<img class="product-image w-100 h-auto" src="../assets/images/<?= $lastOrder->image ?>" alt="">
									</a>
								</div>

								<div class="account-content__last-order__box">
									<div class="product-label fs-3 fw-bold">
										<a href="index.php?action=lastorder&order_id=<?= $lastOrder->id ?>" class="dark transition-300">
											Commande n°<span><?= $lastOrder->ref ?></span>
										</a>
									</div>

									<div class="grey fsize-16">
										Commandé le <span><?= $localDate ?></span>
									</div>
									<div class="fw-bold grey mt-3">
										TOTAL :<span class="fw-bold fst-italic dark fsize-20"><?= $lastOrder->totalPrice ?> €</span>
									</div>

									<div class="lastOrder__content__blocActions" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
										<div class="last-order__order-details">
											<a href="index.php?action=lastorder&order_id=<?= $lastOrder->id ?>" class="thm-btn bg-blue white">
												<span>
													Voir le détail
												</span>
											</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- Account content END  -->

		</div>
	</div>
</section>
<!-- Account END  -->

<?php
// Balise fermante de contenu HTML incluse dans 
// fonction d'affichage du layout user 
userLayout('Espace client - La Tribu Happy Kids');
