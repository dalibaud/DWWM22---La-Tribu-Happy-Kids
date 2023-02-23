<?php
require_once '../src/model/functions.php';
require_once '../src/model/product.php';

function finalCart()
{
  // Affichage du contenu du panier, en fonction des variables de session['panier']
  if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
    $temp_cart = $_SESSION['panier'];
    $products = (new ProductQuery())->queryConnection()->getCart($temp_cart);

    // Calcul du sous-total du panier 
    $subtotal = 0.00;
    foreach ($products as $product) {
      $subtotal += $product->price * $temp_cart[$product->id];
    }

    // Calcul du pris total, en comprenant les frais d'envoi 
    $_SESSION['shipping'] = '';
    if (isset($_GET['tax'])) {
      $shippingtax = $_GET['tax'];
      $_SESSION['shipping'] = $_GET['tax'];
      $totalPrice = $subtotal + $shippingtax;
    }

    // Si le user poursuit vers la page de paiement 
    $_SESSION['products'] = '';
    $_SESSION['totalprice'] = 0;
    // Déclaration des variables de session pour les produits du panier, 
    // ainsi que le prix total de la commande
    if (isset($_POST['set-payment'])) {
      $_SESSION['products'] = $products;
      $_SESSION['totalprice'] = $totalPrice;
      // Redirection vers la page de paiement 
      header('location: index.php?action=payment');
    }
  }
  require '../templates/final-cart.php';
}
