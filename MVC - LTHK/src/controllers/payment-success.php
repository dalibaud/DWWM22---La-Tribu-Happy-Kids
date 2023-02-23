<?php
require_once '../src/model/functions.php';
require_once '../src/model/order.php';

function paymentSuccess()
{
  // Récupération des variables de session pour les produits et le prix total 
  $products = $_SESSION['products'];
  $totalPrice = $_SESSION['totalprice'];
  // Constitution d'un numéro de commande unique
  $orderRef = date("YmdHis") . '-' . $_SESSION['id'];

  // Définition de la valeur à inscrire en bdd pour le type d'envoi 
  $shipping = '';
  if ($_SESSION['shipping'] == 8.99) {
    $shipping = 'envoi classique';
  } else {
    $shipping = 'envoi Express';
  }

  // Inscription de la commande dans la table `orders`
  $newOrderQuery = new OrderQuery();
  $newOrder = $newOrderQuery->queryConnection()->createOrder(
    $_SESSION['id'],
    $orderRef,
    $totalPrice,
    $shipping,
    $_SESSION['alt-address']
  );

  // Récupération de l'id de la commande inscrite 
  $orderID = $newOrderQuery->getLastOrderID();

  // Bouclage pour l'inscription des produits du panier dans la table `order_detail`,
  // complétée avec l'id de la commande correspondante 
  $temp_cart = $_SESSION['panier'];
  foreach ($products as $item) {
    $productTotal = $item->price * $temp_cart[$item->id];
    $orderDetails = $newOrderQuery->createOrderDetails(
      $orderID['order_id'],
      $_SESSION['id'],
      $item->id,
      $item->name,
      $temp_cart[$item->id],
      $item->price,
      $productTotal
    );
  }

  // Destroy des variables de session pour le panier, les produits et le prix total 
  unset($_SESSION['panier']);
  unset($_SESSION['products']);
  unset($_SESSION['totalprice']);

  require '../templates/payment-success.php';
}
