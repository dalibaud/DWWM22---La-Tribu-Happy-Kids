<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('CONNEXION', 'Mot de passe oublié');
?>


<!-- Contact START  -->
<section id="contact-page" class="py-120">
  <div class="container">
    <form action="index.php?action=forgot" method="POST">
      <div class="row">

        <!-- New-pass page title  -->
        <div class="section-title text-center">
          <h2 class="text-center h1 mb-5" data-aos="fade-right" data-aos-delay="150">Réinitialisation du mot de passe</h2>
        </div>

        <!-- Retour d'affichage du message de succès/d'erreur  -->
        <div class="col-8 mx-auto text-center">
          <?php if (!empty($pwdInfos)) { ?>
            <p class="<?= $type_pwdInfos ?>Message"><?= $pwdInfos ?></p>
          <?php } ?>
        </div>

        <!-- Form du nouveau mot de passe  -->
        <div class=" col-md-10 col-lg-6 mx-auto">
          <div class="add-address__note fst-italic ms-20 grey fsize-14" data-aos="fade-down">* Champs requis</div>
          <div data-aos="fade-up" data-aos-duration="500">
            <div>
              <input type="text" placeholder="Nom d'utilisateur *" name="pwd-name" required>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="500">
            <div>
              <input type="email" placeholder="Adresse email *" name="pwd-email" required>
            </div>
          </div>

          <div class="mt-60" data-aos="fade-up" data-aos-duration="500">
            <div class="position-relative">
              <input class="cust-password pass-reveal" type="password" name="new-pwd" autocomplete="off" placeholder="Nouveau mot de passe *" required>
              <span class="show position-absolute top-10 end-20"><i class="fa-sharp fa-solid fa-eye"></i></span>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="500">
            <div>
              <input class="cust-password-bis pass-reveal" type="password" name="new-pwd-bis" autocomplete="off" placeholder="Confirmation du nouveau mot de passe *" required>
            </div>
          </div>
          <div>
            <span class="pass-verify fst-italic fsize-14 text-danger text-center d-none"><i class="fa-solid fa-triangle-exclamation"></i> Les mots de passe ne sont pas identiques !</span>
            <span class="pass-verify-ok fst-italic fsize-14 text-success text-center d-none"><i class="fa-solid fa-circle-check"></i> Les mots de passe sont identiques !</span>
          </div>
          <div>
            <button id="info-update" type="submit" name="pwd-send" class="thm-btn d-block mx-auto mt-60 bg-peach white" data-aos="zoom-in" data-aos-duration="1000"><span>Mettre à jour</span></button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- Contact END -->


<?php
// Balise fermante de contenu HTML incluse dans 
// redirection de la page si déjà connecté 
visitorLayout('Mot de passe oublié - La Tribu Happy Kids');
