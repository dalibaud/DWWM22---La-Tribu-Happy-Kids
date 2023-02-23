<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();


// ----- !! PAGE DE SIMULATION !! -----


// Appel du page header 
pageHeader('PAIEMENT', 'Processus de paiement');
?>

<div class="resume-content__main-title text-center py-120" data-aos="fade-up">
  <h2 class="fw-bold fs-1">En attente de votre paiement...</h2>
</div>

<section class="payment-process">
  <div class="container">
    <div class="row">

      <!-- Payment loader START -->
      <div class="col-4 mx-auto position-relative">
        <div class="loader-container position-absolute start-50-percent top-50-percent">
          <div class="circle position-absolute bradius-50-percent bg-peach start-15-percent"></div>
          <div class="circle position-absolute bradius-50-percent bg-peach start-45-percent"></div>
          <div class="circle position-absolute bradius-50-percent bg-peach end-15-percent"></div>
          <div class="shadow position-absolute bradius-50-percent start-15-percent blur-1"></div>
          <div class="shadow position-absolute bradius-50-percent start-45-percent blur-1"></div>
          <div class="shadow position-absolute bradius-50-percent end-15-percent blur-1"></div>
        </div>
      </div>
      <!-- Payment loader END  -->

    </div>
  </div>
</section>
<!-- Resume END  -->

<?php
// Balise fermante de contenu HTML incluse dans 
// le fonction de redirection si non connecté 
userLayout('Paiement - La Tribu Happy Kids');
