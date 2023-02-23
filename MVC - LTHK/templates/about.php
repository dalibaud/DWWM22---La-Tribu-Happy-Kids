<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('QUI SUIS-JE ?', 'Qui suis-je ?');
?>

<!-- About START  -->
<section id="about-me" class="py-120">
  <div class="container">
    <div class="row">

      <!-- About image  -->
      <div class="col-md-12 col-lg-6">
        <div class="me-20 mb-30" data-aos="zoom-in">
          <img src="../assets/images/rachel-lthk.png" class="bradius-10 w-100"></img>
        </div>
      </div>

      <!-- About content  -->
      <div class="col-md-12 col-lg-6">
        <div class="overflow-hidden">
          <h2 class="fsize-46 dark fw-bold mb-3" data-aos="fade-right">Rachel</h2>
          <p class="fsize-16 fw-bold grey" data-aos="fade-right">Orthophoniste, Maman, Auteure, Créatrice de contenu
          </p>
          <div class="about-me__social d-flex align-items-center my-40">
            <a href="https://www.facebook.com/latribuhappykids/" target="_blank" class="fab fa-facebook-f grey bg-lightGrey d-flex justify-content-center align-items-center bradius-50-percent fsize-18 transition-500 position-relative" data-aos="fade-right"></a>
            <a href="https://www.instagram.com/latribuhappykids/" target="_blank" class="fab fa-instagram ms-20 grey bg-lightGrey d-flex justify-content-center align-items-center bradius-50-percent fsize-18 transition-500 position-relative" data-aos="fade-up" data-aos-delay="300"></a>
            <a href="https://www.tiktok.com/@latribuhappykids" target="_blank" class="fab fa-tiktok ms-20 grey bg-lightGrey d-flex justify-content-center align-items-center bradius-50-percent fsize-18 transition-500 position-relative" data-aos="fade-left" data-aos-delay="600"></a>
          </div>
          <div class="fsize-18 lheight-40 grey">
            <h3 class="lightPurple fw-bold pt-2" data-aos="fade-up">Qui suis-je ?</h3>
            <p class="mt-20 fsize-18" data-aos="fade-up">Diplômée en 2015 de la faculté de médecine de la Pitié Salepétrière, j'exerce
              aujourd'hui en libéral
              à Tours. Je me suis spécialisée dans la prise en charge des troubles oromyo-fonctionnels, notamment
              les paralysies faciales, les SAHOS, ainsi que le bégaiement chez l'adulte et l'enfant.</p>
            <p class="mt-20 fsize-18" data-aos="fade-up">C'est au cours
              de mes rééducations, au contact de mes patients, que je me suis intéressée à la relaxation et aux
              techniques de respiration.</p>
            <p class="mt-20 fsize-18" data-aos="fade-up">Passionnée par mon métier, j'ai décidé de créer le compte instagram
              <a href="https://www.instagram.com/latribuhappykids/" target="_blank" class="insta-link lightPurple">@latribuhappykids</a>
              ainsi que ce
              site, afin de partager mes astuces zens, mes créations orthophoniques, mes histoires de relaxation à
              un public plus large. Je suis également l'auteure de deux livres "Mon petit kit de médiation
              émotionnelle" et "Mon petit kit RESPIRE ET SOUFFLE !" à retrouver sur la boutique.
            <p class="mt-20 fsize-18" data-aos="fade-up" data-aos-delay="100">
              Bonne visite et bienvenue dans la Tribu !
            </p>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- About END  -->


<!-- Video banner START  -->
<section class="video-one position-relative d-block pt-200" data-aos="fade-up" data-aos-delay="100">
  <div class="video-one-bg position-absolute end-0 bottom-0 start-0 z-5"></div>
  <div class=" container">
    <div class="row">

      <div class="col-xl-12">
        <div class="video-one__inner position-relative d-block text-center z-10">

          <!-- Video play  -->
          <div class="video-one__link position-absolute start-50-percent translate-middle-x">
            <a href="https://www.youtube.com/watch?v=cSmp06n6LZ8" target="_blank" class="video-one__btn video-popup" title="Découvrir le métier d'orthophoniste">
              <div class="video-one__video-icon position-relative d-flex align-items-center justify-content-center text-center fsize-26 white bg-lightPurple bradius-50-percent my-0 mx-auto transition-500">
                <span>
                  <i class=" fa-sharp fa-solid fa-play"></i>
                </span>
                <i class="ripple"></i>
              </div>
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<!-- Video banner END  -->


<?php
// Balise fermante de contenu HTML incluse dans 
// la fonction de switch pour le template de disposition 
userLayoutSwitch('Qui suis-je ? - La Tribu Happy Kids'); ?>