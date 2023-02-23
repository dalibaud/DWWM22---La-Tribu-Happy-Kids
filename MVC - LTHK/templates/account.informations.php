<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('ESPACE CLIENT', 'Mes informations personnelles');
?>

<!-- Account START  -->
<section class="account-informations py-80 pb-120">
	<div class="container">
		<div class="row">

			<?php accountSidebar('return') ?>

			<!-- Account content START  -->
			<div class="col-lg-9 ps-3">
				<div class="container account-content">
					<form action="" method="POST">
						<div class="row">
							<!-- Informations form  -->
							<div class="account-content__main-title border-bottom-dark pb-20 mb-50 aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
								<h2 class="fw-bold fs-1">Mes Informations personnelles</h2>
							</div>

							<div class="col-11 col-md-6 mx-auto">
								<div class="personnal__name personnal__box bg-lightGrey bradius-10 mb-2 lheight-18 p-3 " data-aos="fade-right" data-aos-delay="200" data-aos-duration="400">
									<div class="personnal__data pb-10">
										<div class="fw-bold fs-6 text-dark">Prénom :</div>
										<input class="personnal-info bg-transparent border-0 ps-3 mb-3" size="20" type="text" name="cust-first-name" value="<?= ($customer->firstname ?? null) ? $customer->firstname : '" placeholder="Non renseigné"'  ?>">
									</div>
									<div class="personnal__data pb-10">
										<div class="fw-bold fs-6 text-dark">Nom :</div>
										<input class="personnal-info bg-transparent border-0 ps-3 mb-3" size="20" type="text" name="cust-last-name" value="<?= ($customer->lastname ?? null) ? $customer->lastname : '" placeholder="Non renseigné"'  ?>">
									</div>
									<div class="personnal__data pb-10">
										<div class="fw-bold fs-6 text-dark">Téléphone :</div>
										<input class="personnal-info bg-transparent border-0 ps-3 mb-3" size="20" type="tel" name="cust-phone" value="<?= ($customer->phone ?? null) ? $customer->phone : '" placeholder="Non renseigné"'  ?>">
									</div>
									<div class="personnal__data pb-10 col-lg-8">
										<div class="fw-bold fs-6 text-dark">Société :</div>
										<input class="personnal-info bg-transparent border-0 ps-3 mb-3" size="20" type="text" name="cust-society" value="<?= ($customer->society ?? null) ? $customer->society : '" placeholder="Non renseignée"'  ?>">
									</div>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto">
								<div class="personnal__name personnal__box bg-lightGrey bradius-10 mb-2 lheight-18 p-3 " data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
									<div class="personnal__data pb-10">
										<div class="fw-bold fs-6 text-dark">Nom d'utilisateur :</div>
										<input class="personnal-info bg-transparent border-0 ps-3 mb-3" size="20" type="text" name="cust-username" value="<?= $_SESSION['pseudo'] ?>" autocomplete="off">
									</div>
									<div class="personnal__data pb-10">
										<div class="fw-bold fs-6 text-dark">Adresse email :</div>
										<input class="personnal-info bg-transparent border-0 ps-3 mb-3" size="20" type="email" name="cust-email" value="<?= $_SESSION['email'] ?>" autocomplete="off">
									</div>
									<div class="personnal__data pb-10 d-flex flex-column">
										<div class="fw-bold fs-6 text-dark">Changer son mot de passe :</div>
										<div class="position-relative">
											<input class="personnal-info bg-transparent border-0 ps-3 mb-3 cust-password pass-reveal" size="20" type="password" name="cust-password" placeholder="Mot de passe" autocomplete="off">
											<span class="show position-absolute top-5-percent end-40"><i class="fa-sharp fa-solid fa-eye"></i></span>
										</div>
										<input class="personnal-info bg-transparent border-0 ps-3 mb-3 cust-password-bis pass-reveal" size="20" type="password" name="cust-password-bis" placeholder="Confirmation de mot de passe" autocomplete="off">
										<span class="pass-verify fst-italic fsize-14 text-danger d-none"><i class="fa-solid fa-triangle-exclamation"></i> Les mots de passe ne sont pas identiques !</span>
										<span class="pass-verify-ok fst-italic fsize-14 text-success d-none"><i class="fa-solid fa-circle-check"></i> Les mots de passe sont identiques !</span>
									</div>
								</div>
							</div>

							<hr class="d-block d-md-none w-80 mx-auto">

							<!-- Boutons d'action du form  -->
							<div class="col-11 mx-auto row mt-20" data-aos="fade-up" data-aos-delay="50">
								<div class="col-12 col-lg-6 col-xl-5 mx-auto ">
									<a href="index.php?action=informations" class="w-80 mx-auto thm-btn bg-blue white my-20 fsize-18 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
										<span>Annuler</span>
									</a>
								</div>
								<div class="col-12 col-lg-6 col-xl-5 mx-auto ">
									<button type="submit" id="info-update" name="info-update" class="w-80 mx-auto thm-btn bg-peach white my-20 fsize-18 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
										<span>Mettre à jour</span>
									</button>
								</div>
							</div>

							<hr class="w-50 mx-auto my-60" data-aos="fade-left" data-aos-duration="500">

							<!-- Suppression du compte  -->
							<div class="col-12 mx-auto p-30 row mt-10 bg-lightGrey bradius-10 mb-2 lheight-18" data-aos="fade-up" data-aos-duration="500">
								<div class=" delete-account-question col-md-7 d-flex align-items-center">
									Supprimer le compte ?
								</div>
								<div class="col-md-5 delete-account-btn d-flex align-items-center">
									<button type="button" name="info-update" class=" thm-btn bg-peach white fsize-14 m-0 ms-md-5 " data-bs-toggle="modal" data-bs-target="#delete-account" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
										<span>Supprimer ?</span>
									</button>
								</div>
							</div>

							<!-- Delete ACCOUNT START  -->
							<div class="modal fade" id="delete-account" tabindex="-1" aria-labelledby="delete-accountLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title fsize-22 fw-bold" id="delete-accountLabel">Confirmation de Suppression</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body my-3">
											<div class="fsize-20">
												Souhaitez-vous supprimer votre compte ?
												<br>
												<span class="fst-italic w-100 text-center text-danger fsize-14 delete-advice" style="visibility:hidden;"><i class="fa-solid fa-triangle-exclamation"></i> Cela entrainera la suppression intégrale du compte ! <i class="fa-solid fa-triangle-exclamation"></i></span>
											</div>
										</div>
										<div class="modal-footer d-flex justify-content-between">
											<button type="button" class="thm-btn bg-dark white m-2 py-10 px-20 fsize-14 w-30" data-bs-dismiss="modal"><span>Annuler</span></button>
											<button type="submit" id="delete-account-btn" name="delete-account" class="thm-btn bg-peach white m-2 py-10 px-20 fsize-14 w-30 text-center"><span>Supprimer</span></button>
										</div>
									</div>
								</div>
							</div>
							<!-- Delete ACCOUNT END  -->

						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Account content END  -->

	</div>
</section>
<!-- Account END  -->

<?php
// Balise fermante de contenu HTML incluse dans
// fonction d'affichage du layout user
userLayout('Mes informations personnelles - La Tribu Happy Kids');
