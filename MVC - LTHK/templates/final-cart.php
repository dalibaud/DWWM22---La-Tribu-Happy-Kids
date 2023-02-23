<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('RÉCAPITULATIF', 'Récapitulatif de commande');
?>

<!-- Resume START  -->
<div class="resume-content__main-title text-center mb-60 mt-80" data-aos="fade-up">
  <h2 class="fw-bold fs-1">Récapitulatif final de votre commande</h2>
</div>

<section class="cart-table py-60" id="final-cart">
  <div class="container">
    <div class="row">

      <div class="resume-content__cart-title col-12" data-aos="fade-right">
        <h2 class="fw-bold fs-2 mb-50 pb-20 border-bottom">Votre panier</h2>
      </div>

      <div class="col-md-10 mx-auto px-40 py-20 bg-lightGrey mb-20 bradius-10">
        <!-- Bouclage pour l'affichage des produits du panier  -->
        <?php
        if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
          foreach ($products as $item) {
            $linetotal = 0.00;
            $linetotal = $item->price * $temp_cart[$item->id];
        ?>
            <div class="final-cart-product row d-flex justify-content-between align-items-center my-20 border-bottom">
              <div class="col-xl-8 d-flex justify-content-between align-items-center" data-label="Item">
                <div class="cart-table__item">
                  <img src="../assets/images/<?= $item->image ?>" alt="">
                  <span class="fsize-18 ms-20 fw-bold"><?= $item->name ?></span>
                </div>
                <span class="fsize-22 me-30 lightPurple"><?= $item->price ?> €</span>
              </div>
              <div class="text-end col-lg-9 col-xl-2 fw-bold grey" data-label="Quantity">
                Quantité : <span class="fst-italic dark"><?= $temp_cart[$item->id] ?></span>
              </div>
              <div class="final-cart_product-total text-start col-lg-3 col-xl-2 fw-bold grey" data-label="Total">Total : <span class="fst-italic dark"><?= $linetotal ?> €</span></div>
            </div>
        <?php
          }
        }
        ?>
      </div>

    </div>
  </div>
</section>
<!-- Resume END  -->



<!-- Shipment & payment START  -->
<section class="shipment-payment pb-120">
  <div class="container">
    <form action="" method="POST">
      <div class="row">

        <!-- Choix du mode de livraison, et des frais d'envoi  -->
        <div class="col-lg-5 mx-auto pt-80 ">
          <div class="resume-content__shipment-title col-12">
            <h2 class="fw-bold fs-2 mb-3 pb-3 border-bottom" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">Votre mode de livraison</h2>
          </div>
          <span class="fst-italic text-danger fsize-16 shipping-advice">Veuillez choisir un mode de livraison : </span>
          <div class="checkout__payment p-20" data-aos="fade-right" data-aos-delay="150" data-aos-duration="500">
            <div class="checkout__checkbox p-10">
              <a href="index.php?action=finalcart&tax=8.99">
                <input type="checkbox" id="home-shipping" name="home-shipping" value="8.99" <?= (isset($_GET['tax']) && $_GET['tax'] == 8.99) ? 'checked=""' : '' ?>>
                <label for="different-address" class="checkout__title lheight-2 d-flex align-items-center home-shipping fw-bold grey fsize-20 mb-0">Livraison classique : <span class="fst-italic lightDark"> 8.99 €</span>
              </a>
            </div>
            <div class="checkout__checkbox p-10">
              <a href="index.php?action=finalcart&tax=14.99">
                <input type="checkbox" id="relay-shipping" name="relay-shipping" value="14.99" <?= (isset($_GET['tax']) && $_GET['tax'] == 14.99) ? 'checked=""' : '' ?>>
                <label for="different-address" class="checkout__title lheight-2 d-flex align-items-center relay-shipping fw-bold grey fsize-20 mb-0">Livraison Express : <span class="fst-italic lightDark"> 14.99 €</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Shipment END  -->

        <!-- Détail du prix du panier  -->
        <div class="col-lg-5 mx-auto pt-80 ">
          <div class="resume-content__payment-title mb-60" data-aos="fade-left" data-aos-delay="200" data-aos-duration="400">
            <h2 class="fw-bold fs-2 pb-3 border-bottom">Votre total</h2>
          </div>
          <div>
            <ul class="list-unstyled proceed-to-checkout__list">
              <li class="d-flex justify-content-between align-items-center">
                <span class="d-block fw-bold grey fsize-20" data-aos="fade-right">Sous-total TTC</span>
                <i class="fw-bold lightDark" data-aos="fade-left"><span class="fw-bold fst-italic fsize-22 grey"><?= $subtotal ?></span> €</i>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <span class="d-block fw-bold grey fsize-20" data-aos="fade-right">Frais de port</span>
                <i class="fw-bold lightDark" data-aos="fade-left" data-aos-delay="50" data-aos-duration="250"><span class="fw-bold fst-italic fsize-22 grey" id="shipping-price"><?= (isset($_GET['tax'])) ? $shippingtax : '--' ?></span> €</i>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <span class="d-block fw-bold grey fsize-20" data-aos="fade-right">Total TTC</span>
                <i class="fw-bold lightDark" data-aos="fade-left" data-aos-delay="100" data-aos-duration="400"><span class="fw-bold fst-italic fsize-22 lightPurple" id="total-price"><?= (isset($_GET['tax'])) ? $totalPrice : $subtotal ?></span> €</i>
              </li>
            </ul>
            <div class="proceed-to-payment__buttons d-flex justify-content-end align-items-end mt-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
              <button type="submit" name="set-payment" class="thm-btn bg-peach white" <?= (isset($_GET['tax'])) ? '' : 'disabled=""' ?>><span>Payer la commande</span></button>
            </div>
          </div>
        </div>

    </form>
  </div>
  </div>
</section>
<!-- Shipment & payment END  -->


<?php
// Balise fermante de contenu HTML incluse dans 
// le fonction de redirection si non connecté 
userLayout('Récapitulatif final - La Tribu Happy Kids');
