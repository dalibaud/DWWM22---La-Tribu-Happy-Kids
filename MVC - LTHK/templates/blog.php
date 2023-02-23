<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('BLOG', 'Blog');
?>

<!-- Blog START -->
<section id="blog" class="py-120">
  <div class="container">

    <!-- Blog page title  -->
    <div class="section-title text-center mb-50">
      <span class="section-title__tagline text-muted">
        Les articles de la tribu !
      </span>
      <h2>Blog</h2>
    </div>

    <div class="row">
      <!-- Bouclage de l'affichage de tous les articles  -->
      <?php
      if ($posts) {
        foreach ($posts as $post) { ?>
          <div class="col-md-6 col-xl-4 mb-50" data-aos="fade-up">
            <div class="blog-article position-relative bradius-10 p-0 m-0 d-flex justify-content-between flex-column h-100 ">
              <div class="position-relative d-block">
                <div class="blog-image position-relative rounded-top">
                  <img class="w-100" src="../assets/images/<?= $post->image ?>" />
                  <a href="index.php?action=blogdetails&id=<?= $post->id ?>" class="position-absolute top-0 end-0 bottom-0 start-0 d-flex justify-content-center align-items-center rounded top transition-500">
                    <span class="position-relative cross"></span>
                  </a>
                </div>
                <div class="blog-date d-block bradius-10 py-20 px-15 text-center white bg-blue position-absolute" data-aos="fade-left">
                  <p class="fsize-10 fw-bold m-0 lheight-14 px-20 py-2"><span class="d-block fsize-16"><?= $post->day ?></span>
                    <?= $post->month ?>
                  </p>
                </div>
              </div>

              <div>
                <div class="card-body px-3 m-4 mt-5">
                  <div>
                    <a class="card-title dark transition-500 " href="index.php?action=blogdetails&id=<?= $post->id ?>">
                      <h3 class="fw-bold"><?= $post->title ?></h3>
                    </a>
                    <br>
                    <p class="card-text mb-5 text-secondary text-left fsize-20">
                      <?= $post->resume ?>
                    </p>
                  </div>
                  <div class="blog-footer d-flex justify-content-between mt-50 pt-10 border-top">
                    <div data-aos="fade-left">
                      <a class="mt-20 fw-bold lightPurple" href="index.php?action=blogdetails&id=<?= $post->id ?>">Lire</a>
                    </div>
                    <div data-aos="fade-right">
                      <a class="mt-20 fw-bold lightPurple" href="index.php?action=blogdetails&id=<?= $post->id ?>"><span class="fa-solid fa-arrow-right"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } ?>
    </div>

  </div>
</section>
<!-- Blog END -->



<?php
// Balise fermante de contenu HTML incluse dans 
// la fonction de switch pour le template de disposition 
userLayoutSwitch('Blog - La Tribu Happy Kids'); ?>