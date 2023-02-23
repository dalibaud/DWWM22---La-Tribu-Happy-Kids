<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('CONNEXION', 'Connexion');
?>


<!-- Login START  -->
<section class="py-120">
	<div class="container">
		<div class="row">

			<!-- Retour d'affichage du message de succès/d'erreur  -->
			<div class="col-12 account-content__main-title mb-4 text-center aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
				<div class="col-6">
					<?php if (!empty($login_msg)) { ?>
						<p class="<?= $type_login_msg; ?>Message"><?= $login_msg; ?></p>
					<?php } ?>
				</div>
				<div class="col-6 offset-6">
					<?php if (!empty($signin_msg)) { ?>
						<p class="<?= $type_signin_msg; ?>Message"><?= $signin_msg; ?></p>
					<?php } ?>
				</div>
			</div>

			<!-- Image de masquage pour le form de login  -->
			<div class="col-12 col-md-10 col-lg-6 col-xl-5 mx-auto mb-50">
				<div id="logincard" class="position-relative overflow-hidden d-none">
					<img src="../assets/images/login-mask.jpg" id="logupimg" class="w-100 position-relative bradius-10 brightness-80" data-aos="zoom-in" data-aos-duration="500">
					<span class="position-absolute bottom-0 start-50-percent translate-middle"><button class="thm-btn bg-peach white mt-3 d-flex signin-display" data-aos="fade-up"><span>Connexion</span></button></span>
				</div>

				<!-- Login form  -->
				<div id="loginform" class="">
					<div class="login-page__login__box">
						<h3 class="dark fsize-30 fw-bold lheight-2 m-0 mb-4" data-aos="fade-up">Connexion</h3>
						<form class="login-form pt-4" action="index.php?action=login" method="POST">
							<div class="row">
								<div class="add-address__note fst-italic overflow-hidden ms-20 grey fsize-14" data-aos="fade-down">* Champs requis</div>
								<p class="login-form__content" data-aos="fade-up">
									<span class="email-input">
										<input type="text" name="username-1" id="username1" autocomplete="off" placeholder="Nom d'utilisateur ou email *">
									</span>
								</p>
								<div class="login-form__content" data-aos="fade-up" data-aos-delay="100">
									<div class="password-input login-password-input position-relative">
										<input class="pass-reveal" type="password" name="password-1" id="password1" autocomplete="off" placeholder="Mot de passe *" required>
										<span class="show position-absolute top-10 end-20">
											<i class="fa-sharp fa-solid fa-eye"></i>
										</span>
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<a class="forget-pwd text-end lightPurple" href="index.php?action=forgot" data-aos="fade-right" data-aos-delay="200">
										<span class="ms-20 fsize-16 transition-300 ">Mot de passe oublié ?</span>
									</a>
								</div>
							</div>

							<div class="form-row position-relative" data-aos="fade-up" data-aos-delay="150">
								<button type="submit" class="login-form__button thm-btn bg-blue white" name="login">
									<span>Se connecter</span>
								</button>
							</div>
						</form>
					</div>
				</div>

			</div>

			<!-- Image de masquage pour le form d'inscription  -->
			<div class="col-12 col-md-10 col-lg-6 col-xl-5 mx-auto ">
				<div id="logupcard" class="position-relative overflow-hidden">
					<img src="../assets/images/login-mask.jpg" id="logupimg" class="w-100 position-relative bradius-10 brightness-80" data-aos="zoom-in" data-aos-duration="500">
					<span class="position-absolute bottom-0 start-50-percent translate-middle"><button class="thm-btn bg-peach white d-flex login-display"><span>Inscription</span></button></span>
				</div>

				<!-- Signup Form  -->
				<div id="logupform" class="d-none">
					<div class="login-page__signup__box">
						<h3 class="dark fsize-30 fw-bold lheight-2 m-0 mb-4">Inscription</h3>
						<form class="login-form pt-4" action="index.php?action=signup" method="post">
							<input type="hidden" name="url_referer-2" value="<?= addressTernaire($_SERVER, 'HTTP_REFERER') ?>">

							<div class="row">
								<div class="add-address__note fst-italic overflow-hidden ms-20 grey fsize-14" data-aos="fade-down">* Champs requis</div>
								<p class="login-form__content col-6">
									<span class="email-input">
										<input type="text" name="username-2" id="username2" autocomplete="off" placeholder="Nom d'utilisateur *">
									</span>
								</p>
								<p class="login-form__content col-6">
									<span class="email-input">
										<input type="email" name="email-2" id="username2" autocomplete="off" placeholder="Email *">
									</span>
								</p>

								<div class="login-form__content">
									<div class="password-input signup-password-input position-relative">
										<input class="cust-password pass-reveal-2" type="password" name="password-2" id="password2" autocomplete="off" placeholder="Mot de passe *" required>
										<span class="show-2 position-absolute top-10 end-20"><i class="fa-sharp fa-solid fa-eye"></i></span>
									</div>
								</div>

								<p class="login-form__content">
									<span class="password-bis-input">
										<input class="cust-password-bis pass-reveal-2" type="password" name="password-2-bis" id="password2-bis" autocomplete="off" placeholder="Confirmation du mot de passe *" required>
									</span>
								</p>
							</div>
							<div>
								<span class="pass-verify fst-italic fsize-14 text-danger text-center d-none">
									<i class="fa-solid fa-triangle-exclamation"></i> Les mots de passe ne sont pas identiques !
								</span>
								<span class="pass-verify-ok fst-italic fsize-14 text-success text-center d-none">
									<i class="fa-solid fa-circle-check"></i> Les mots de passe sont identiques !
								</span>
							</div>
							<p class="form-row mt-3">
								<button id="info-update" type="submit" class="logup-form__button thm-btn bg-blue white" name="signup"><span>S'inscrire</span></button>
							</p>
						</form>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>
<!-- Login END  -->



<?php
// Balise fermante de contenu HTML incluse dans 
// redirection de la page si déjà connecté 
visitorLayout('Page de connexion / d\'inscription - La Tribu Happy Kids');
