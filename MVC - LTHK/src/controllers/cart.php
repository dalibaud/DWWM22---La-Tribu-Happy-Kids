<?php
require_once '../src/model/functions.php';
require_once '../src/model/product.php';

function cart()
{
  // Affichage du contenu du panier, si les variables de session['panier'] existent
  if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
    $temp_cart = $_SESSION['panier'];
    $products = (new ProductQuery())->queryConnection()->getCart($temp_cart);

    // Calcul du sous-total du panier 
    $subtotal = 0.00;
    foreach ($products as $product) {
      $subtotal += $product->price * $temp_cart[$product->id];
    }

    // Update des quantités du panier 
    if (isset($_POST['update'])) {
      foreach ($_POST as $key => $value) {
        if (strpos($key, 'quantity') !== false && is_numeric($value)) {
          $id = str_replace('quantity-', '', $key);
          $quantité = $value;

          if (is_numeric($id) && isset($_SESSION['panier'][$id]) && $quantité > 0) {
            $_SESSION['panier'][$id] = $quantité;
          }
        }
      }
      header('location: index.php?action=cart#cart-section');
    }

    // Suppression 1 ligne 
    if (isset($_GET['id'])) {
      unset($_SESSION['panier'][$_GET['id']]);
      header('location: index.php?action=cart#cart-section');
    }

    // Suppression du panier entier 
    if (isset($_POST['empty-cart'])) {
      foreach ($_SESSION['panier'] as $k => $v) {
        unset($_SESSION['panier'][$k]);
      }
      header('location: index.php?action=cart#cart-section');
    }
  }
  // Si le panier n'est pas vide, on peut accéder à la page checkout.php
  if (isset($_POST['checkout']) && isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
    header('Location: index.php?action=checkout');
  }
  require '../templates/cart.php';
}
