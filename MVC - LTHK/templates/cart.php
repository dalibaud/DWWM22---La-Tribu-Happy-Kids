<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('PANIER', 'Panier');
?>

<!-- Bannière de la page panier  -->
<div class="cart-banner mt-5 mb-3 mx-4 text-center" id="cart-section">
  <img src="../assets/images/rainbow-banner.png" class="w-60 my-30" alt="">
</div>

<!-- Cart START  -->
<section class="cart-table py-50" id="cart-table">
  <div class="container">
    <form action="index.php?action=cart" method="POST">
      <div class="row">

        <!-- Contenu du panier de session  -->
        <div>
          <table class="w-100">
            <thead data-aos="fade-up" data-aos-delay="50">
              <tr class="border-bottom">
                <th class="fsize-20 lightDark pb-20" scope="col">Article</th>
                <th class="fsize-20 lightDark pb-20" scope="col">Prix</th>
                <th class="fsize-20 lightDark pb-20" scope="col">Quantité</th>
                <th class="fsize-20 lightDark pb-20" scope="col">Total</th>
                <th class="fsize-20 lightDark pb-20 text-center" scope="col">Supprimer</th>
              </tr>
            </thead>
            <tbody data-aos="fade-up" data-aos-delay="50">

              <!-- Bouclage pour l'affichage des produits du panier  -->
              <?php
              if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
                foreach ($products as $item) {
                  // Calcul du total par ligne du panier 
                  $linetotal = 0.00;
                  $linetotal = $item->price * $temp_cart[$item->id];
              ?>
                  <tr class="border-bottom" data-aos="fade-up" data-aos-delay="150">
                    <!-- Product image and title  -->
                    <td class="py-20" data-label="Article">
                      <div class="cart-table__item">
                        <img src="../assets/images/<?= $item->image ?>" alt="">
                        <h3 class="m-0 fsize-20 lightDark fw-bold ms-30"><?= $item->name ?></h3>
                      </div>
                    </td>
                    <!-- Product unity price -->
                    <td class="py-20" data-label="Prix"><?= $item->price ?>€</td>
                    <!-- Product quantity  -->
                    <td class="py-20" data-label="Quantité">
                      <div class="quantity-box border-all position-relative overflow-hidden bradius-25">
                        <button type="button" name="sub-item" class="sub p-0 border-0 position-absolute top-0 start-0 fsize-18 grey bg-transparent">-</button>
                        <input type="number" id="product-1" name="quantity-<?= $item->id ?>" class="w-100 h-100 border-0 bg-transparent text-center fsize-18 grey" value="<?= $temp_cart[$item->id] ?>">
                        <button type="button" name="add-item" class="add p-0 border-0 position-absolute top-0 end-0 fsize-18 grey bg-transparent">+</button>
                      </div>
                    </td>
                    <!-- Product total  -->
                    <td class="py-20" data-label="Total"><?= $linetotal ?> €</td>
                    <!-- Product delete option  -->
                    <td class="position-relative py-20" data-label="Supprimer">
                      <button type="button" class="cart-table__close-button position-absolute top-50-percent end-30-percent translate-middle bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#delete-modal-<?= $item->id ?>">
                        <span class="cart-table__close"></span>
                      </button>
                    </td>
                  </tr>

                  <!-- Delete 1 Line Modal START  -->
                  <div class="modal fade" id="delete-modal-<?= $item->id ?>" tabindex="-1" aria-labelledby="delete-modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fw-bold" id="delete-modalLabel">Confirmation de Suppression</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Souhaitez-vous supprimer ces produits du panier ?</p>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                          <button type="button" class="thm-btn bg-blue white py-10 px-30 fsize-14" data-bs-dismiss="modal"><span>Annuler</span></button>
                          <a href="index.php?action=cart&id=<?= $item->id ?>" class="delete-one thm-btn bg-peach white py-10 px-30 fsize-14"><span>Supprimer</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Delete Line Modal END  -->

              <?php
                }
              }
              ?>

            </tbody>
          </table>
        </div>

        <div class="d-flex flex-row align-items-center justify-content-end mt-5">
          <!-- Bouton de mise à jour des quantités du panier  -->
          <div class="proceed-to-checkout__buttons d-flex justify-content-end" data-aos="fade-right" data-aos-delay="400">
            <button type="submit" name="update" class="thm-btn bg-lightPurple white fsize-12 py-10 px-30" <?= (empty($_SESSION['panier'])) ? 'disabled=""' : '' ?>><span>Mettre à jour le panier</span></button>
          </div>
          <!-- Bouton de suppression du panier  -->
          <div class="proceed-to-checkout__buttons d-flex justify-content-end" data-aos="fade-left" data-aos-delay="400">
            <input type="button" class="thm-btn bg-lightPurple white fsize-12 py-10 px-30 ms-30" data-bs-toggle="modal" data-bs-target="#delete-modal-all" value="Tout supprimer" <?= (empty($_SESSION['panier'])) ? 'disabled=""' : '' ?>>
          </div>
        </div>

        <!-- Delete All Modal START  -->
        <div class="modal fade" id="delete-modal-all" tabindex="-1" aria-labelledby="delete-modal-allLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fw-bold" id="delete-modal-allLabel">Confirmation de Suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Souhaitez-vous supprimer votre panier ?</p>
              </div>
              <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="thm-btn bg-blue white py-10 px-30 fsize-14" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="thm-btn bg-peach white py-10 px-30 fsize-14" name="empty-cart">Supprimer</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Delete All Modal END  -->


      </div>
    </form>
  </div>
</section>
<!-- Cart END  -->

<hr class="w-40 mx-auto mt-60 border-all-dark" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500">

<!-- Proceed checkout START  -->
<section class="proceed-to-checkout pt-50 pb-120">
  <div class="container">
    <form action="" method="POST">
      <div class="row">
        <div class="col-lg-8">
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled mb-20">
            <li class="d-flex justify-content-between align-items-center grey fsize-20">
              <span class="d-block border-bottom pb-10 fw-bold" data-aos="fade-right">Sous-total TTC</span>
              <i class="fw-bold intensePurple" data-aos="fade-up" data-aos-delay="50"><?= (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) ?  $subtotal : 0.00 ?> €</i>
            </li>
          </ul>
          <div class="mt-40 d-flex justify-content-end" data-aos="fade-left" data-aos-delay="400">
            <button type="submit" name="checkout" class="thm-btn bg-peach white">
              <span>Poursuivre</span>
            </button>
          </div>
        </div>
    </form>
  </div>
</section>
<!-- Proceed checkout END  -->


<?php
// Balise fermante de contenu HTML incluse dans 
// la fonction de switch pour le template de disposition 
userLayoutSwitch('Votre panier - La Tribu Happy Kids'); ?>