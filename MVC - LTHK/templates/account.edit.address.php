<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('ESPACE CLIENT', 'Modification d\'adresse');
?>

<!-- Edit address START  -->
<section class="account pt-80 pb-120">
	<form action="" method="POST">
		<div class="container">
			<div class="row">

				<?php accountSidebar('return') ?>

				<!-- Edit billing address START  -->
				<div class="col-lg-9 mt-4 ps-3">
					<div class="container account-content">
						<div class="row">
							<div class="account-content__main-title border-bottom-dark pb-20 mb-50 aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
								<h2 class="fw-bold fs-1">Mes adresses</h2>
							</div>

							<!-- Form de modification de l'adresse de facturation  -->
							<div id="edit-address" class="my-3">
								<h3>Modifier l'adresse de facturation :</h3>
							</div>

							<div class="row col-md-10 mx-auto position-relative comment-one__form">
								<div class="add-address__note fst-italic overflow-hidden ms-20 grey fsize-14" data-aos="fade-down">* Champs requis</div>
								<div class="col-md-6">
									<div class="comment-form__input-box" data-aos="fade-right">
										<input type="text" placeholder="Prénom *" name="cust-firstname" required class="info-input" value="<?= addressTernaire($customer, 'firstname') ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="comment-form__input-box" data-aos="fade-left">
										<input type="text" placeholder="Nom *" name="cust-lastname" required class="info-input" value="<?= addressTernaire($customer, 'lastname') ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="comment-form__input-box" data-aos="fade-right">
										<input type="tel" placeholder="Téléphone *" name="cust-phone" required class="info-input" value="<?= addressTernaire($customer, 'phone') ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="comment-form__input-box" data-aos="fade-left">
										<input type="text" placeholder="Société... (facultatif)" name="cust-society" class="info-input" value="<?= addressTernaire($customer, 'society') ?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="comment-form__input-box" data-aos="fade-up">
										<input type="text" placeholder="Adresse *" name="cust-street" required class="info-input" value="<?= addressTernaire($customer, 'street') ?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="comment-form__input-box" data-aos="fade-up">
										<input type="text" placeholder="Appartement, interphone,... (facultatif)" name="cust-option" class="info-input" value="<?= addressTernaire($customer, 'option') ?>">
									</div>
								</div>
								<div class="col-md-6" data-aos="fade-right">
									<div class="comment-form__input-box">
										<input class="fsize-16" type="text" placeholder="Code postal *" name="cust-zipcode" value="<?= addressTernaire($customer, 'zipcode') ?>">
									</div>
								</div>
								<div class="col-md-6" data-aos="fade-left">
									<div class="comment-form__input-box">
										<input class="fsize-16" type="text" placeholder="Ville *" name="cust-city" value="<?= addressTernaire($customer, 'city') ?>">
									</div>
								</div>
								<div class="col-md-6" data-aos="fade-right">
									<div class="comment-form__input-box">
										<input class="fsize-16" type="text" placeholder="Département *" name="cust-county" value="<?= addressTernaire($customer, 'county') ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="comment-form__input-box" data-aos="fade-left">
										<select name="cust-country" class="custom-select-box info-input">
											<option value="France" <?= (isset($customer->country) && $customer->country == "France") ? ' selected=""' : '' ?>>France</option>
											<option value="Belgique" <?= (isset($customer->country) && $customer->country == "Belgique") ? ' selected=""' : '' ?>>Belgique</option>
											<option value="Suisse" <?= (isset($customer->country) && $customer->country == "Suisse") ? ' selected=""' : '' ?>>Suisse</option>
										</select>
									</div>
								</div>
								<div class="col-md-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="300">
									<div class="comment-form__input-box">
										<textarea class="fsize-16" name="cust-info-2" placeholder="Informations complémentaires..." rows="3"><?= addressTernaire($customer, 'info') ?></textarea>
									</div>
								</div>

							</div>

							<hr class="d-block d-md-none w-80 mx-auto">

							<!-- Boutons d'action du form  -->
							<div class="col-11 mx-auto d-flex justify-content-center align-items-center mt-10">
								<a href="index.php?action=address" class="thm-btn bg-blue white fsize-16 me-3 w-30 text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
									<span>Annuler</span>
								</a>
								<button type="submit" name="billing-update" class="thm-btn bg-peach white fsize-16 w-30 text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
									<span>Mettre à jour</span>
								</button>
							</div>

						</div>
					</div>
				</div>
				<!-- Edit billing address END  -->

				<!-- Edit shipping address START  -->
				<!-- Si une adresse de livraison a été trouvée  -->
				<?php
				if ($customerShipping->firstname ?? null) {
				?>
					<div class="col-lg-9 offset-lg-3 my-50">
						<hr>
					</div>
					<div id="edit-shipping" class="col-lg-9 offset-lg-3 ps-3">
						<div class="container account-content">
							<div class="row">

								<!-- Form de modification de l'adresse de livraison  -->
								<div id="edit-address" class="mb-3">
									<h3>Modifier l'adresse de livraison :</h3>
								</div>

								<div class="row col-md-10 mx-auto position-relative comment-one__form">
									<div class="add-address__note fst-italic overflow-hidden ms-20 grey fsize-14" data-aos="fade-down">* Champs requis</div>
									<div class="col-md-12" data-aos="fade-up">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Nom de l'adresse (facultatif)" name="cust-name-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'name') ?>">
										</div>
									</div>
									<div class="col-md-6" data-aos="fade-right">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Prénom *" name="cust-firstname-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'firstname') ?>">
										</div>
									</div>
									<div class="col-md-6" data-aos="fade-left">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Nom *" name="cust-lastname-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'lastname') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="comment-form__input-box" data-aos="fade-right">
											<input type="text" placeholder="Téléphone *" name="cust-phone-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'phone') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="comment-form__input-box" data-aos="fade-left">
											<input type="text" placeholder="Société... (facultatif)" name="cust-society-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'society') ?>">
										</div>
									</div>
									<div class="col-md-12" data-aos="fade-up">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Adresse *" name="cust-street-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'street') ?>">
										</div>
									</div>
									<div class="col-md-12" data-aos="fade-up">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Appartement, interphone,... (facultatif)" name="cust-option-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'option') ?>">
										</div>
									</div>
									<div class="col-md-6" data-aos="fade-right">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Code postal *" name="cust-zipcode-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'zipcode') ?>">
										</div>
									</div>
									<div class="col-md-6" data-aos="fade-left">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Ville *" name="cust-city-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'city') ?>">
										</div>
									</div>
									<div class="col-md-6" data-aos="fade-right">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Département *" name="cust-county-2" class="additionnal-input" value="<?= addressTernaire($customerShipping, 'county') ?>">
										</div>
									</div>
									<div class="col-md-6" data-aos="fade-left">
										<div class="comment-form__input-box">
											<select name="cust-country-2" class="custom-select-box additionnal-input">
												<option value="France" <?= (isset($customerShipping->country) && $customerShipping->country == "France") ? ' selected=""' : '' ?>>France</option>
												<option value="Belgique" <?= (isset($customerShipping->country) && $customerShipping->country == "Belgique") ? ' selected=""' : '' ?>>Belgique</option>
												<option value="Suisse" <?= (isset($customerShipping->country) && $customerShipping->country == "Suisse") ? ' selected=""' : '' ?>>Suisse</option>
											</select>
										</div>
									</div>
									<div class="col-md-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="300">
										<div class="comment-form__input-box">
											<textarea class="additionnal-input" name="cust-info-2" placeholder="Informations complémentaires..." rows="3"><?= addressTernaire($customerShipping, 'info') ?></textarea>
										</div>
									</div>
								</div>


								<hr class="d-block d-md-none w-80 mx-auto">

								<!-- Boutons d'action du form  -->
								<div class="col-11 mx-auto d-flex justify-content-center align-items-center mt-10">
									<a href="index.php?action=address" class="thm-btn bg-blue white fsize-16 me-3 w-30 text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
										<span>Annuler</span>
									</a>
									<button type="submit" name="shipping-update" class="thm-btn bg-peach white fsize-16 w-30 text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
										<span>Mettre à jour</span>
									</button>
								</div>

							</div>
						</div>
					</div>
				<?php
				}
				?>
				<!-- Edit shipping address END  -->
			</div>

		</div>
	</form>
</section>


<?php
// Balise fermante de contenu HTML incluse dans
// fonction d'affichage du layout user
userLayout('Modification d\'adresse - La Tribu Happy Kids');
