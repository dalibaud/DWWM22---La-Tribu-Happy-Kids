<?php
require_once '../src/model/functions.php';
require_once '../src/model/address.php';
require_once '../src/model/shipping-address.php';

function checkout()
{
  $addressQuery = new AddressQuery();
  $customer = $addressQuery->queryConnection()->getAddress($_SESSION['id']);

  // Si une adresse de facturation existe 
  if (isset($customer)) {
    // Sinon, l'adresse de livraison sera la même que la facturation 
    $shippingAddressQuery = new ShippingAddressQuery();
    $customerShipping = $shippingAddressQuery->queryConnection()->getShippingAddress($_SESSION['id']);
  }

  // --------------- UPDATE Billing address ---------------
  // Si le user poursuit la navigation vers le récapitulatif
  if (isset($_POST['final-cart'])) {
    // Inscription de l'adresse de facturation en bdd 
    $customer = $addressQuery->updateAddress($customer->id, $_POST);


    // ------------- UPDATE Shipping address -------------
    // Si le user a renseigné un nom pour l'adresse de livraison 
    if (isset($_POST['cust-name-2']) && !empty($_POST['cust-name-2'])) {
      $addressName = $_POST['cust-name-2'];
      // Sinon, on inscrit un nom par défaut 
    } else {
      $addressName = 'Domicile 1';
    }

    // Déclaration de variable de session d'adresse de livraison, pour la table `orders`
    $_SESSION['alt-address'] = '';
    // Si le user souhaite renseigner une adresse de livraison 
    if ($_POST['check-shipping'] == 1) {
      // Inscription de l'adresse de livraison en bdd
      $customer = $shippingAddressQuery->updateShippingAddress($customerShipping->id, $addressName, $_POST);

      // Variable de session d'adresse de livraison true
      $_SESSION['alt-address'] = 1;
    } else {
      $_SESSION['alt-address'] = 0;
    }
    // Redirection vers la page récapitulative 
    header('location: index.php?action=finalcart');
  }
  require '../templates/checkout.php';
}
