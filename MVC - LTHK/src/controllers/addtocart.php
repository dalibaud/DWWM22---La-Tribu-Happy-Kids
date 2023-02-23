<?php
require_once '../src/model/functions.php';
require_once '../src/model/product.php';

function addToCart(array $input)
{
  // Requête d'ajout au panier 
  if (isset($input['add-cart'])) {
    // Contrôle si une valeur est envoyée par le bouton "Ajouter au panier"
    if (isset($input['product_id'], $input['quantity'])) {
      $ajout = (new ProductQuery())->queryConnection()->getProduct($input['product_id']);

      $product_id = $input['product_id'];
      $quantity = $input['quantity'];

      // Contrôle si l'article est déjà présent dans le panier 
      if ($ajout && $quantity > 0) {
        // Si le panier de session est existant 
        if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
          // Si l'article est déjà présent dans le panier, on augmente la quantité
          if (array_key_exists($product_id, $_SESSION['panier'])) {
            $_SESSION['panier'][$product_id] += $quantity;
            // Sinon on ajoute l'article 
          } else {
            $_SESSION['panier'][$product_id] = $quantity;
          }
          // Sinon, on déclare le panier de session
        } else {
          $_SESSION['panier'] = array($product_id => $quantity);
        }

        // Redirection vers le shop
        if (isset($_SESSION['pseudo'])) {
          header('location: index.php?action=shop');
          // Sinon, redirection vers le login, si non-connecté
        } else {
          header('location: index.php?action=connection&referer=product');
        }
      }
    }
  }
}
