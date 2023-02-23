<?php
// Balise ouvrante de contenu HTML, pour la page layout.php  
ob_start();
// Appel du page header 
pageHeader('VÉRIFICATION', 'Vérification de l\'adresse');
?>

<!-- Checkout START  -->
<section class="checkout-page pb-100" data-aos="fade-up">
  <form action="index.php?action=checkout" method="POST">
    <div class="container">
      <div class="row">
        <!-- Form pour l'adresse de facturation  -->
        <div class="col-md-10 col-lg-6 col-xl-5 mx-auto mt-80">
          <div class="checkout-label ">
            <h3 class=" checkout__title lightDark fw-bold lheight-30 fsize-28">
              Détails de la facturation
            </h3>
          </div>
          <div class="comment-one__form row">
            <div class="add-address__note fst-italic overflow-hidden ms-20 grey fsize-14" data-aos="fade-down">* Champs requis</div>
            <div class="col-md-6">
              <div class="comment-form__input-box" data-aos="fade-right">
                <input type="text" placeholder="Prénom *" name="cust-firstname" required class="info-input" value="<?= addressTernaire($customer, 'firstname') ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="comment-form__input-box" data-aos="fade-left">
                <input type="text" placeholder="Nom *" name="cust-lastname" required class="info-input" value="<?= addressTernaire($customer, 'lastname') ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="comment-form__input-box" data-aos="fade-right">
                <input type="tel" placeholder="Téléphone *" name="cust-phone" required class="info-input" value="<?= addressTernaire($customer, 'phone') ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="comment-form__input-box" data-aos="fade-left">
                <input type="text" placeholder="Société... (facultatif)" name="cust-society" class="info-input" value="<?= addressTernaire($customer, 'society') ?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="comment-form__input-box" data-aos="fade-up">
                <input type="text" placeholder="Adresse *" name="cust-street" required class="info-input" value="<?= addressTernaire($customer, 'street') ?>" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="comment-form__input-box" data-aos="fade-up">
                <input type="text" placeholder="Appartement, interphone,... (facultatif)" name="cust-option" class="info-input" value="<?= addressTernaire($customer, 'option') ?>">
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <div class="comment-form__input-box">
                <input class="fsize-16 info-input" type="text" placeholder="Code postal *" name="cust-zipcode" value="<?= addressTernaire($customer, 'zipcode') ?>" required>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <div class="comment-form__input-box">
                <input class="fsize-16 info-input" type="text" placeholder="Ville *" name="cust-city" value="<?= addressTernaire($customer, 'city') ?>" required>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <div class="comment-form__input-box">
                <input class="fsize-16 info-input" type="text" placeholder="Département *" name="cust-county" value="<?= addressTernaire($customer, 'county') ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="comment-form__input-box" data-aos="fade-left">
                <select name="cust-country" class="custom-select-box info-input" required>
                  <option value="France" <?= (isset($customer->country) && $customer->country == "France") ? ' selected=""' : '' ?>>France</option>
                  <option value="Belgique" <?= (isset($customer->country) && $customer->country == "Belgique") ? ' selected=""' : '' ?>>Belgique</option>
                  <option value="Suisse" <?= (isset($customer->country) && $customer->country == "Suisse") ? ' selected=""' : '' ?>>Suisse</option>
                </select>
              </div>
            </div>
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="300">
              <div class="comment-form__input-box">
                <textarea class="fsize-16 info-input" name="cust-info-2" placeholder="Informations complémentaires..." rows="4"><?= addressTernaire($customer, 'info') ?></textarea>
              </div>
            </div>

          </div>
        </div>

        <!-- Form pour l'adresse de livraison  -->
        <div class="col-md-10 col-lg-6 col-xl-5 mx-auto mt-80">
          <div class="checkout-label checkout__checkbox position-relative d-flex align-items-start">
            <input type="checkbox" name="check-shipping" value="1" id="different-address" <?= ($customerShipping == null) ? '' : 'checked' ?>>
            <label for="different-address" id="checkout__title" class="checkout__title lightDark fw-bold lheight-30 fsize-28  d-flex align-items-center">
              Envoi vers une adresse différente
            </label>
          </div>
          <div class="comment-one__form row">
            <div class="add-address__note fst-italic overflow-hidden ms-20 grey fsize-14" data-aos="fade-down">* Champs requis</div>
            <div class="col-md-6" data-aos="fade-right">
              <div class="comment-form__input-box">
                <input type="text" placeholder="Prénom *" name="cust-firstname-2" class="additionnal-input additionnal-required" value="<?= addressTernaireAlt($customerShipping, 'firstname', $customer) ?>">
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <div class="comment-form__input-box">
                <input type="text" placeholder="Nom *" name="cust-lastname-2" class="additionnal-input additionnal-required" value="<?= addressTernaireAlt($customerShipping, 'lastname', $customer) ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="comment-form__input-box" data-aos="fade-right">
                <input type="text" placeholder="Téléphone *" name="cust-phone-2" class="additionnal-input additionnal-required" value="<?= addressTernaireAlt($customerShipping, 'phone', $customer) ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="comment-form__input-box" data-aos="fade-left">
                <input type="text" placeholder="Société... (facultatif)" name="cust-society-2" class="additionnal-input" value="<?= addressTernaireAlt($customerShipping, 'society', $customer) ?>">
              </div>
            </div>
            <div class="col-md-12" data-aos="fade-up">
              <div class="comment-form__input-box">
                <input type="text" placeholder="Adresse *" name="cust-street-2" class="additionnal-input additionnal-required" value="<?= addressTernaireAlt($customerShipping, 'street', $customer) ?>">
              </div>
            </div>
            <div class="col-md-12" data-aos="fade-up">
              <div class="comment-form__input-box">
                <input type="text" placeholder="Appartement, interphone,... (facultatif)" name="cust-option-2" class="additionnal-input" value="<?= addressTernaireAlt($customerShipping, 'option', $customer) ?>">
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <div class="comment-form__input-box">
                <input type="text" placeholder="Code postal *" name="cust-zipcode-2" class="additionnal-input additionnal-required" value="<?= addressTernaireAlt($customerShipping, 'zipcode', $customer) ?>">
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <div class="comment-form__input-box">
                <input type="text" placeholder="Ville *" name="cust-city-2" class="additionnal-input additionnal-required" value="<?= addressTernaireAlt($customerShipping, 'city', $customer) ?>">
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <div class="comment-form__input-box">
                <input type="text" placeholder="Département *" name="cust-county-2" class="additionnal-input additionnal-required" value="<?= addressTernaireAlt($customerShipping, 'county', $customer) ?>">
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <div class="comment-form__input-box" additionnal-required>
                <?php if ($customerShipping->country ?? null) { ?>
                  <select name="cust-country-2" class="custom-select-box additionnal-input">
                    <option value="France" <?= (isset($customerShipping->country) && $customerShipping->country == "France") ? ' selected=""' : '' ?>>France</option>
                    <option value="Belgique" <?= (isset($customerShipping->country) && $customerShipping->country == "Belgique") ? ' selected=""' : '' ?>>Belgique</option>
                    <option value="Suisse" <?= (isset($customerShipping->country) && $customerShipping->country == "Suisse") ? ' selected=""' : '' ?>>Suisse</option>
                  </select>
                <?php } else { ?>
                  <select name="cust-country" class="custom-select-box additionnal-input">
                    <option value="France" <?= (isset($customer->country) && $customer->country == "France") ? ' selected=""' : '' ?>>France</option>
                    <option value="Belgique" <?= (isset($customer->country) && $customer->country == "Belgique") ? ' selected=""' : '' ?>>Belgique</option>
                    <option value="Suisse" <?= (isset($customer->country) && $customer->country == "Suisse") ? ' selected=""' : '' ?>>Suisse</option>
                  </select>
                <?php } ?>
              </div>
            </div>
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="300">
              <div class="comment-form__input-box">
                <textarea class="additionnal-input" name="cust-info-2" placeholder="Informations complémentaires..." rows="2"><?= addressTernaireAlt($customerShipping, 'info', $customer) ?></textarea>
              </div>
            </div>
            <div class="col-md-12" data-aos="fade-up">
              <div class="comment-form__input-box">
                <input type="text" placeholder="Nom de l'adresse (facultatif)" name="cust-name-2" class="additionnal-input" value="<?= addressTernaireAlt($customerShipping, 'name', $customer) ?>">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-50">
        <div class="checkout-btn text-right d-flex justify-content-end" data-aos="fade-up" data-aos-duration="600">
          <button type="submit" name="final-cart" class="thm-btn bg-peach white checkout-page__btn">
            <span>Récapitulatif</span>
          </button>
        </div>
      </div>
    </div>
  </form>
</section>
<!-- Checkout END  -->


<?php
// Balise fermante de contenu HTML incluse dans 
// le fonction de redirection si non connecté 
userLayout('Vérification des informations - La Tribu Happy Kids');
