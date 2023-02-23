<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('PAIEMENT', 'Paiement réussi');
?>

<div class="resume-content__main-title text-center py-120" data-aos="fade-up">
  <h2 class="fw-bold fs-1">Payement effectué avec succès !</h2>
</div>

<!-- Paiement réussi, la page propose au user le retour à l'accueil  -->
<section class="pb-150">
  <div class="container">
    <form action="" method="POST">
      <div class="row">

        <div class="col-8 col-md-6 col-lg-4 mx-auto text-center">
          <a href="index.php" name="finish-payment" class="thm-btn bg-blue white">
            <span>Retour à l'accueil</span>
          </a>
        </div>

      </div>
    </form>
  </div>
</section>
<!-- Resume END  -->

<?php
// Balise fermante de contenu HTML incluse dans 
// le fonction de redirection si non connecté 
userLayout('Paiement réussi - La Tribu Happy Kids');
