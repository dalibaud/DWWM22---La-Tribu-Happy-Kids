<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('ESPACE CLIENT', 'Détails de la commande');
?>

<!-- Account START  -->
<section class="account pt-80 pb-120">
	<div class="container">
		<div class="row">

			<?php accountSidebar('return') ?>

			<!-- Account content START  -->
			<div class="col-lg-9 mt-4 ps-3">
				<div class="account-content">

					<!-- Si la commande existe, affichage des détails de la commande  -->
					<?php
					if ($currentOrder[0]->id ?? null) {
					?>
						<div class="account-content__main-title border-bottom-dark pb-20 mb-50  aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
							<h2 class="fw-bold fs-1">Détails de la commande</h2>
						</div>

						<div class="account-content__last-order border-all bradius-10 bg-lightGrey p-20" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
							<div class="px-3 pt-2 ">
								<div class="account-content__last-order__date fs-6">
									<h3 class="fw-bold text-dark"> Commande du <span><?= $localDate ?></span></h3>
								</div>
								<div class="text-muted">
									<div class="order-number">
										Commande n° <span><?= $currentOrder[0]->ref ?></span>
									</div>
									<br>
									<div class="product-shipment__mode" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
										Expédié par : <span><?= $currentOrder[0]->mode ?></span>
									</div>
									<div class="product-shipment__price" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
										Frais d'envoi : <span><?= ($currentOrder[0]->mode == 'envoi classique') ? 8.99 : 14.99 ?></span> €
									</div>
								</div>
							</div>
							<div class="lightDark fw-bold p-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
								Status :<span class="fw-normal"> Livrée </span>
								<br>
								Livraison à l'adresse : <span class="fw-normal" data-toggle="tooltip" title="<?= $address ?>"><?= ($shippingAddress->name ?? null) ? $shippingAddress->name : 'Adresse principale' ?></span>
								<br>

							</div>
							<div class="p-3 pt-2">
								<div class="fw-bold text-uppercase" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
									Montant Total : <span class="fw-normal text-normal"><?= $currentOrder[0]->totalPrice ?> </span> €
								</div>
							</div>
						</div>


						<hr class="w-75 mx-auto my-60 border-all-dark" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500">

						<div class="container">

							<!-- Bouclage pour l'affichage des produits de la commande -->
							<?php
							foreach ($currentOrder as $item) {
							?>
								<div class="last-order__content__block d-flex flex-row justify-content-between pb-30 mb-40 border-bottom" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
									<div class="last-order__product-image d-flex align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="400">
										<a href="index.php?action=productdetails&id=<?= $item->product ?>">
											<img src="../assets/images/<?= $item->image ?>" class="w-100 h-auto my-auto" alt="">
										</a>
									</div>

									<div class="last-order__product__title ps-5 w-75" data-aos="fade-up" data-aos-delay="100" data-aos-duration="400">
										<div class="product-label fs-4 fw-bold">
											<a href="index.php?action=productdetails&id=<?= $item->product ?>" class="text-dark">
												<?= $item->name ?>
											</a>
										</div>
										<div class="fsize-20 fw-bold lightPurple">
											<?= $item->price ?> €
										</div>
										<div class="last-order__quantity grey">
											Quantité : <span class="dark fw-bold fst-italic"><?= $item->quantity ?> pcs.</span>
										</div>
										<div class="last-order__quantity grey">
											Montant total : <span class="dark fw-bold fst-italic"><?= $item->productTotal ?> €</span>
										</div>
									</div>

									<div class=" mx-auto text-center  mb-3 mt-auto">
										<div class="last-order__order-details">
											<a href="index.php?action=productdetails&id=<?= $item->product ?>" class="thm-btn w-100 fsize-14 bg-peach white" data-aos="fade-up" data-aos-delay="250" data-aos-duration="400">
												<span>
													Détails
												</span>
											</a>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
				</div>
			<?php
					}
			?>

			</div>
		</div>
		<!-- Account content END  -->

	</div>
</section>
<!-- Account END  -->

<?php
// Balise fermante de contenu HTML incluse dans 
// fonction d'affichage du layout user 
userLayout('Détails de la commande - La Tribu Happy Kids');
