<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('BLOG', 'Détails de l\'article');
?>

<!-- Blog details START  -->
<section class="blog-details py-120">
  <div class="container">
    <div class="row">

      <div class="col-12 col-lg-8 mt-4 mx-auto" data-aos="fade-up" data-aos-delay="100">
        <div class="blgo-details__left overflow-hidden">

          <div class="position-relative d-block mb-20">
            <!-- Image du blog  -->
            <img src="../assets/images/<?= $post->image ?>" class="w-100 bradius-10" alt="">
            <!-- Date de création du blog  -->
            <div class="blog-date d-block bradius-10 py-20 px-15 text-center white bg-blue position-absolute" data-aos="fade-left">
              <p class="fsize-10 fw-bold m-0 lheight-14 px-20 py-2"><span class="d-block fsize-16"><?= $post->day ?></span>
                <?= $post->month ?>
              </p>
            </div>
          </div>

          <div class="mt-80 position-relative d-block">
            <!-- Titre du blog  -->
            <h2 class="fsize-30 fw-bold lheight-40"><?= $post->title ?></h2>
            <!-- Description du blog  -->
            <p class="mt-30 grey">
              <?= $post->content ?>
            </p>
          </div>
        </div>
      </div>

      <!-- Affichage des 3 articles de blog les plus récents  -->
      <div class="col-12 col-lg-4 mt-4 mx-auto" data-aos="fade-up" data-aos-delay="100">
        <div class="card p-shop-card bradius-10 bg-lightGrey border-0 p-4 overflow-hidden">
          <div class="card-body grey">
            <h5 class="card-title fs-4 fw-bold">Derniers blogs</h5>
            <div class="recentblog mt-5 ">
              <!-- Bouclage de l'affichage pour les 3 derniers articles de blog -->
              <?php
              foreach ($lastPosts as $lastPost) { ?>
                <div class="d-flex mb-4">
                  <img data-src="../assets/images/<?= $lastPost->image ?>" class=" rounded-circle align-self-center ls-is-cached lazyloaded" alt="" src="../assets/images/<?= $lastPost->image ?>" width="68" height="62" data-aos="fade-right">
                  <div class="align-self-center mb-0 ms-3 fs-6 last-art-title lheight-24" data-aos="fade-left" data-aos-delay="100">
                    <a href="blog-details.php?id=<?= $lastPost->id ?>" class="transition-500 grey">
                      <?= $lastPost->title ?>
                    </a>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog details END  -->



<?php
// Balise fermante de contenu HTML incluse dans 
// la fonction de switch pour le template de disposition 
userLayoutSwitch('Détails de l\'article - La Tribu Happy Kids'); ?>