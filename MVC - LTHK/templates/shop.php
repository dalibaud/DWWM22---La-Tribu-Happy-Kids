<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('BOUTIQUE', 'La boutique de la Tribu');
?>

<!-- Shop START  -->
<section class="main-shop py-100">
  <div class="container">

    <!-- Shop title  -->
    <div class="account-content__main-title mb-5 text-center aos-init os-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
      <h2 class="fw-bold fs-1">La boutique de la Tribu</h2>
    </div>

    <div class="row">

      <!-- Sidebar START  -->
      <div class="col-lg-3 mt-30">
        <div class="main-shop__sidebar">

          <!-- Effacer la recherche  -->
          <?php if (isset($_POST['search']) && !empty($_POST['search'])) { ?>
            <div class="no-search border-all bradius-10 py-10 bg-borderBox">
              <a href="index.php?action=shop" class="text-dark d-flex align-items-center justify-content-center">
                <span class="fw-bold fsize-20 me-2">X</span> Effacer la recherche ?
              </a>
            </div>
          <?php } else { ?>
            <form action="index.php?action=search" method="POST">
              <!-- Searchbar  -->
              <div class="main-shop__sidebar__search bg-lightPurple px-30 bradius-10" data-aos="fade-right">
                <div class="d-flex justify-content-between align-items-center">
                  <input type="text" id="search-input" name="search" class="w-85 border-0 mb-0 bg-transparent white fsize-16" placeholder="Rechercher...">
                  <button type="submit" class="bg-transparent border-0 white fsize-20 p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search white" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                  </button>
                </div>
              </div>
            </form>
          <?php  } ?>

          <!-- Recherche par catégorie  -->
          <div class="mt-40 border-all p-30 bradius-10" data-aos="fade-right">
            <h3 class=" border-bottom pb-20 fsize-20 fw-bold dark m-0 mb-20">Catégories</h3>
            <ul class="list-unstyled main-shop__sidebar__category__list">
              <li class="position-relative lheight-46"><a class="fsize-16 grey transition-500 start-30 position-relative" href="index.php?action=shop">Toutes</a></li>
              <li class="position-relative lheight-46"><a class="fsize-16 grey transition-500 start-30 position-relative" href="index.php?action=shop&cat=nouveau">Nouveautés</a></li>
              <li class="position-relative lheight-46"><a class="fsize-16 grey transition-500 start-30 position-relative" href="index.php?action=shop&cat=promo">Promotions</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Sidebar END  -->

      <!-- Shop content START  -->
      <div class="col-lg-9">
        <div class="row" id="product-list">

          <!-- Affichage des produits  -->
          <?php
          if ($products) {
            foreach ($products as $product) { ?>
              <div class="col-md-6 col-lg-4 product mb-20" data-aos="fade-up" data-aos-delay="100">
                <div class="main-shop__item mt-30 h-100">
                  <div class="main-shop__image mb-20 position-relative">
                    <?php if ($product->status ?? null) { ?>
                      <span class="category position-absolute top-0 end-0 px-2 white bg-dark z-10 fsize-12 fw-bold lheight-1 lspacing-1 text-uppercase"><?= $product->status ?></span>
                    <?php } ?>
                    <img src="../assets/images/<?= $product->image ?>" class="w-100 bradius-10 transition-500" alt="">
                    <a href="index.php?action=productdetails&id=<?= $product->id ?>" class="thm-btn addCart"><span>Voir</span></a>
                  </div>
                  <div class="text-center d-flex flex-column flex-grow-1">
                    <a href="index.php?action=productdetails&id=<?= $product->id ?>" class="shop-title__link lightDark">
                      <h3 class="shopTitle mt-20 fsize-22 fw-bold"><?= $product->name ?></h3>
                    </a>
                    <p class="text-muted mt-auto"><?= $product->price ?>€</p>
                  </div>
                </div>
              </div>
          <?php
            }
          } ?>

        </div>
      </div>
      <!-- Shop content END  -->

    </div>

  </div>
</section>
<!-- Shop END  -->


<?php
// Balise fermante de contenu HTML incluse dans 
// la fonction de switch pour le template de disposition 
userLayoutSwitch('Boutique - La Tribu Happy Kids'); ?>