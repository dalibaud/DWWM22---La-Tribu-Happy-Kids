<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('BOUTIQUE', 'Détails du produit');
?>

<!-- Product details START  -->
<section id="product-details" class="py-100">
  <div class="container">
    <div class="row">

      <!-- Product image  -->
      <div class="col-lg-5 mx-auto mb-50">
        <div class="product-details__image" data-aos="zoom-in">
          <?php if ($product->status ?? null) { ?>
            <span class="category position-absolute top-0 end-0 px-2 white bg-dark z-10 fsize-18 fw-bold lheight-1 lspacing-1 text-uppercase"><?= $product->status ?></span>
          <?php } ?>
          <img src="../assets/images/<?= $product->image ?>" class="w-100 h-auto h-500-max my-0 mx-auto bradius-10" alt="">
        </div>
      </div>

      <!-- Product details  -->
      <div class="col-lg-5 mx-auto ps-3">
        <form action="index.php?action=addtocart" method="POST">
          <div class="product-details__content">

            <!-- Product name and price  -->
            <div class="d-flex align-items-baseline pb-20 border-bottom" data-aos="fade-right">
              <h2 class="m-0 fsize-32 fw-bold lightDark"> <?= $product->name ?></h2>
              <div class="fsize-20 fw-bold lightPurple ms-20"><?= $product->price ?>€</div>
            </div>
            <div class="fsize-16 lheight-34 grey mt-20" data-aos="fade-left">
              <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo
                venenatis ligula commodo leez sed blandit convallis dignissim onec vel pellentesque
                neque.
              </p>
            </div>

            <!-- Add quantity  -->
            <div class="d-flex align-items-center my-20">
              <div class="fsize-18 fw-bold dark lheight-2 me-20" data-aos="fade-up" data-aos-delay="50">Quantité
              </div>
              <div class="quantity-box border-all position-relative overflow-hidden bradius-25" data-aos="fade-left" data-aos-delay="150">
                <button type="button" class="sub p-0 border-0 position-absolute top-0 start-0 fsize-18 grey bg-transparent">-</button>
                <input type="number" class="w-100 h-100 border-0 bg-transparent text-center fsize-18 grey" name="quantity" id="product-1" value="1" min="1" max="">
                <button type="button" class="add p-0 border-0 position-absolute top-0 end-0 fsize-18 grey bg-transparent">+</button>
                <input type="hidden" name="product_id" value="<?= $product->id ?>">
              </div>
            </div>

            <!-- Add button  -->
            <div class="d-flex align-items-center mt-30" data-aos="fade-up" data-aos-delay="50">
              <button type="submit" name="add-cart" class="thm-btn bg-lightPurple white"><span>Ajouter au panier</span></button>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>
</section>
<!-- Product details END  -->

<!-- Product description START  -->
<section class="col-lg-10 mx-auto pt-70 pb-120" data-aos="fade-up" data-aos-delay="100">
  <div class="container">
    <div class="row">

      <div class="col-lg-9 col-xl-9 mx-auto">
        <h3 class="mb-50 fsize-30 lightDark fw-bold">Description</h3>
        <div class="m-0 lightDark fsize-16 lheight-32 mb-20">
          <p>
            <?= $product->description ?>
          </p>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Product description END  -->


<?php
// Balise fermante de contenu HTML incluse dans 
// la fonction de switch pour le template de disposition 
userLayoutSwitch('Détails du produit - La Tribu Happy Kids');
?>