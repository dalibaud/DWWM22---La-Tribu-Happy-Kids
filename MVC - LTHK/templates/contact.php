<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('CONTACT', 'Contact');
?>

<!-- Contact START  -->
<section id="contact-page" class="py-100">
  <div class="container">
    <form action="index.php?action=sendmessage" method="POST">
      <div class="row">

        <!-- Retour d'affichage du message de succès/d'erreur  -->
        <div class="col-12 fsize-20 mb-4 text-center aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
          <div id="statusMessage" class="col-6 mx-auto">
            <?php if (!empty($db_msg)) { ?>
              <p class="<?= $type_db_msg; ?>Message"><?= $db_msg; ?></p>
            <?php } ?>
            <?php if (!empty($mail_msg)) { ?>
              <p class="<?= $type_mail_msg; ?>Message"><?= $mail_msg; ?></p>
            <?php } ?>
          </div>
        </div>

        <!-- Contact page title  -->
        <div class="section-title text-center">
          <span class="section-title__content text-muted d-block" data-aos="fade-right" data-aos-delay="50">
            Contact
          </span>
          <h2 class="text-center h1 mb-5" data-aos="fade-right" data-aos-delay="150">Écrivez-nous un message</h2>
        </div>

        <!-- Contact page form  -->
        <div class="col-md-10 col-lg-6 mx-auto row">
          <div class="add-address__note fst-italic overflow-hidden ms-20 grey fsize-14" data-aos="fade-down">* Champs requis</div>
          <div data-aos="fade-up" data-aos-duration="500">
            <div>
              <input type="text" placeholder="Nom et prénom *" name="contact-name" required>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="500">
            <div>
              <input type="email" placeholder="Email *" name="contact-email" required>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="700">
            <div>
              <input type="text" placeholder="Sujet du message *" name="contact-subject" required>
            </div>
          </div>
          <div>
            <div data-aos="fade-up" data-aos-duration="1000">
              <textarea placeholder="Écrivez votre message... *" name="contact-message" rows="4" required></textarea>
            </div>
            <button type="submit" name="send" class="thm-btn bg-peach white d-block mx-auto mt-60" data-aos="zoom-in" data-aos-duration="1000"><span>Envoyer le message</span></button>
          </div>

        </div>
      </div>
    </form>
  </div>
</section>
<!-- Contact END -->


<?php
// Balise fermante de contenu HTML incluse dans 
// la fonction de switch pour le template de disposition 
userLayoutSwitch('Contact - La Tribu Happy Kids'); ?>