<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('ESPACE CLIENT', 'Mes adresses');
?>

<!-- Account START  -->
<section class="account pt-80 pb-120">
	<div class="container">
		<div class="row">

			<?php accountSidebar('return') ?>

			<!-- Account content START  -->
			<div class="col-11 col-lg-9 mx-auto mt-4 ps-3">
				<div class="account-content__address">

					<!-- Address page title -->
					<div class="account-content__main-title border-bottom-dark pb-20 mb-50 aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
						<h2 class="fw-bold fs-1">Mes adresses</h2>
					</div>

					<!-- Affichage de l'adresse de facturation  -->
					<div class="billing-address__box border-all bradius-10 p-4 mb-3 row" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
						<div class="col-12 col-md-3 fw-bold d-flex align-items-center text-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">
							<div class="billing-address__box__status">
								<?= ($customerShipping->firstname ?? null) ? 'Adresse de facturation' : 'Adresse de facturation et de livraison' ?>
							</div>
						</div>

						<div class="col-12 col-md-9 ps-4 border-left">
							<div class="billing-address__title fs-6">
								<h3 class="fw-bold text-dark fsize-24">
									<?= ($customerShipping->firstname ?? null) ? 'Adresse de facturation' : 'Adresse principale' ?>
								</h3>
								<hr class="w-100">
							</div>
							<div class="billing-address__content fsize-16 lheight-24 position-relative">

								<div class="address__name">
									<?= ($customer->firstname ?? null) ? $customer->firstname . ' ' . $customer->lastname : '<div class="text-muted fst-italic">Prénom et nom non renseignés</div>' ?>
								</div>
								<div class="billing-address__informations">
									<?= ($customer->firstname ?? null) ? $customer->street : '<div class="text-muted fst-italic">Adresse non renseignée</div>' ?>
								</div>
								<div class="billing-address__city">
									<?= ($customer->firstname ?? null) ? $customer->zipcode . ' ' . $customer->city : '' ?>
								</div>
								<div class="billing-address__society">
									Société : <?= ($customer->society ?? null) ? $customer->society : '<span class="text-muted fst-italic">Non renseignée</span>' ?>
								</div>
								<div class="billing-address__phone">
									Tél : <?= ($customer->phone ?? null) ? $customer->phone : '<span class="text-muted fst-italic">Non renseigné</span>' ?>
								</div>
								<div class="billing-address__email">
									<a class="peach user-email" href="mailto:<?= $_SESSION['email'] ?>"><?= $_SESSION['email'] ?></a>
								</div>

								<span class="position-absolute top-50 address-edition" data-aos="fade-left" data-aos-delay="200" data-aos-duration="500">
									<a href="index.php?action=editaddress">
										<svg class="grey" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
											<path d="M8,112V16c0-4.414,3.594-8,8-8h80c4.414,0,8,3.586,8,8v47.031l8-8V16c0-8.836-7.164-16-16-16H16C7.164,0,0,7.164,0,16v96    c0,8.836,7.164,16,16,16h44v-8H16C11.594,120,8,116.414,8,112z M88,24H24v8h64V24z M88,40H24v8h64V40z M88,56H24v8h64V56z M24,80    h32v-8H24V80z M125.656,72L120,66.344c-1.563-1.563-3.609-2.344-5.656-2.344s-4.094,0.781-5.656,2.344l-34.344,34.344    C72.781,102.25,68,108.293,68,110.34L64,128l17.656-4c0,0,8.094-4.781,9.656-6.344l34.344-34.344    C128.781,80.188,128.781,75.121,125.656,72z M88.492,114.82c-0.453,0.43-2.02,1.488-3.934,2.707l-10.363-10.363    c1.063-1.457,2.246-2.922,2.977-3.648l25.859-25.859l11.313,11.313L88.492,114.82z" />
										</svg>
									</a>
								</span>

							</div>
						</div>
					</div>

					<!-- Affichage de l'adresse de livraison, si existante  -->
					<?php if ($customerShipping->firstname ?? null) { ?>
						<hr class="w-75 mx-auto my-5 text-muted" data-aos="fade-right" data-aos-delay="100" data-aos-duration="500">

						<div class="shipping-address__box border-all bradius-10 p-4 mb-3 row" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
							<div class="col-12 col-md-3 fw-bold d-flex align-items-center text-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="400">
								<div class="shipping-address__box__status">
									Adresse de livraison
								</div>

							</div>

							<div class="col-12 col-md-9 ps-4 border-left">
								<div class="shipping-address__title fs-6">
									<h3 class="fw-bold text-dark">
										<?= $customerShipping->name ?>
									</h3>
									<hr>
								</div>
								<div class="shipping-address__content fsize-16 lheight-24 position-relative overflow-hidden">

									<div class="address__name">
										<?= $customerShipping->firstname . ' ' . $customerShipping->lastname ?>
									</div>
									<div class="billing-address__informations">
										<?= $customerShipping->street ?>
									</div>
									<div class="billing-address__city">
										<?= $customerShipping->zipcode . ' ' . $customerShipping->city ?>
									</div>
									<div class="billing-address__option">
										<?= ($customerShipping->option ?? null) ? '<span class="text-muted fst-italic">' . $customerShipping->option  . '</span>'  : '' ?>
									</div>
									<div class="billing-address__society">
										Société : <?= ($customerShipping->society ?? null) ? $customerShipping->society : '<span class="text-muted fst-italic">Non renseignée</span>' ?>
									</div>
									<div class="billing-address__option">
										<?= ($customerShipping->info ?? null) ? '<span class="text-muted fst-italic">"' . $customerShipping->info  . '"</span>'  : '' ?>
									</div>
									<div class="billing-address__phone">
										Tél : <?= $customerShipping->phone ?>
									</div>
									<div class="billing-address__email">
										<a class="peach user-email" href="mailto:<?= $_SESSION['email'] ?>"><?= $_SESSION['email'] ?></a>
									</div>

									<span class="position-absolute address-edition" data-aos="fade-down" data-aos-delay="200" data-aos-duration="500">
										<a href="index.php?action=editaddress#edit-shipping">
											<svg class="grey" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
												<path d="M8,112V16c0-4.414,3.594-8,8-8h80c4.414,0,8,3.586,8,8v47.031l8-8V16c0-8.836-7.164-16-16-16H16C7.164,0,0,7.164,0,16v96    c0,8.836,7.164,16,16,16h44v-8H16C11.594,120,8,116.414,8,112z M88,24H24v8h64V24z M88,40H24v8h64V40z M88,56H24v8h64V56z M24,80    h32v-8H24V80z M125.656,72L120,66.344c-1.563-1.563-3.609-2.344-5.656-2.344s-4.094,0.781-5.656,2.344l-34.344,34.344    C72.781,102.25,68,108.293,68,110.34L64,128l17.656-4c0,0,8.094-4.781,9.656-6.344l34.344-34.344    C128.781,80.188,128.781,75.121,125.656,72z M88.492,114.82c-0.453,0.43-2.02,1.488-3.934,2.707l-10.363-10.363    c1.063-1.457,2.246-2.922,2.977-3.648l25.859-25.859l11.313,11.313L88.492,114.82z" />
											</svg>
										</a>
									</span>

									<span class="position-absolute address-delete" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
										<button type="button" class="bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#delete-address">
											<svg class="grey" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox=" 0 0 753.23 753.23" style="enable-background:new 0 0 753.23 753.23;" xml:space="preserve">
												<path d="M635.538,94.154h-141.23V47.077C494.308,21.067,473.24,0,447.23,0H306c-26.01,0-47.077,21.067-47.077,47.077v47.077     h-141.23c-26.01,0-47.077,21.067-47.077,47.077v47.077c0,25.986,21.067,47.053,47.03,47.077h517.917     c25.986-0.024,47.054-21.091,47.054-47.077V141.23C682.615,115.221,661.548,94.154,635.538,94.154z M447.23,94.154H306V70.615     c0-12.993,10.545-23.539,23.538-23.539h94.154c12.993,0,23.538,10.545,23.538,23.539V94.154z M117.692,659.077     c0,51.996,42.157,94.153,94.154,94.153h329.539c51.996,0,94.153-42.157,94.153-94.153V282.461H117.692V659.077z M470.77,353.077     c0-12.993,10.545-23.539,23.538-23.539s23.538,10.545,23.538,23.539v282.461c0,12.993-10.545,23.539-23.538,23.539     s-23.538-10.546-23.538-23.539V353.077z M353.077,353.077c0-12.993,10.545-23.539,23.539-23.539s23.538,10.545,23.538,23.539     v282.461c0,12.993-10.545,23.539-23.538,23.539s-23.539-10.546-23.539-23.539V353.077z M235.384,353.077     c0-12.993,10.545-23.539,23.539-23.539s23.539,10.545,23.539,23.539v282.461c0,12.993-10.545,23.539-23.539,23.539     s-23.539-10.546-23.539-23.539V353.077z" />
											</svg>
										</button>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>

					<!-- Delete shipping address Modal START  -->
					<div class="modal fade" id="delete-address" tabindex="-1" aria-labelledby="delete-addressLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="delete-addressLabel">Confirmation de Suppression</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<p>Souhaitez-vous supprimer l'adresse "<?= $customerShipping->name ?>" ?</p>
								</div>
								<div class="modal-footer d-flex justify-content-between">
									<button type="button" class="thm-btn bg-blue white m-2 py-10 px-20 fsize-14 w-30" data-bs-dismiss="modal"><span>Annuler</span></button>
									<a class="delete-btn thm-btn bg-peach white m-2 py-10 px-20 fsize-14 w-30 text-center" href="index.php?action=address&id=<?= $customerShipping->id ?>" type="button"><span>Supprimer</span></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Delete shipping address Modal END  -->

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
userLayout('Mes adresses - La Tribu Happy Kids');
