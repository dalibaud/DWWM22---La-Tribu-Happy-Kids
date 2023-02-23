<?php
require_once '../src/model/functions.php';
require_once '../src/model/user.php';

function signup(array $input)
{
  // ------------- SIGNIN SCRIPT --------------
  // Si le form d'inscription est envoyé 
  if (isset($input['signup'])) {
    // Si le form est rempli 
    if (
      !empty($input['username-2']) && !empty($input['email-2']) && !empty($input['password-2']) && !empty($input['password-2-bis'])
    ) {
      // Requête pour chercher, dans la bdd,  les infos fournies
      $userExists = new UserQuery();
      $exists = $userExists->queryConnection()->checkVisitor($input['username-2'], $input['email-2']);

      // Si le username n'est pas déjà existant
      if ($exists == null || ($exists->username != $input['username-2'] && ucfirst($exists->username) != $input['username-2'])) {
        // Si l'email n'est pas déjà existant 
        if ($exists == null || ($exists->email != $input['email-2'])) {
          // Si les deux mots de passe correspondent 
          if ($input["password-2"] == $input["password-2-bis"]) {

            // Inscription du visiteur en bdd
            $created = $userExists->createUser($input);

            // Récupération de l'id du nouveau user 
            $newUser = $userExists->getUser($input['username-2']);

            // Déclaration de variables de session 
            $_SESSION['pseudo'] = $input['username-2'];
            $_SESSION['email'] = $input['email-2'];
            $_SESSION['id'] = $newUser->id;

            // Création de l'adresse de facturation et de livraison vierges, 
            // pour leur future utilisation dans la page checkout.php
            $createdAddress = (new AddressQuery())->queryConnection()->createNewAddress($_SESSION['id']);
            $createdShippingAddress = (new ShippingAddressQuery())->queryConnection()->createNewShippingAddress($_SESSION['id']);

            // Si le visiteur vient d'une page produit, on le redirige vers le shop
            if (isset($_SERVER['HTTP_REFERER']) && str_contains($_SERVER['HTTP_REFERER'], 'product')) {
              header('location: index.php?action=shop');
              // Sinon vers l'espace client
            } else {
              header('location: index.php?action=account');
            }
            // Message d'erreur si les mots de passe ne correspondent pas 
          } else {
            $signin_msg = 'Le mot de passe n\'est pas identique.';
            $type_signin_msg = 'error';
            require '../templates/connection.php';
          }
          // Message d'erreur si l'adresse existe déjà dans la bdd 
        } else {
          $signin_msg = 'Adresse email déjà inscrite sur le site.';
          $type_signin_msg = 'error';
          require '../templates/connection.php';
        }
        // Message d'erreur si le username existe déjà dans la bdd 
      } else {
        $signin_msg = 'Nom d\'utilisateur non disponible.';
        $type_signin_msg = 'error';
        require '../templates/connection.php';
      }
      // Message d'erreur si le form est incomplet 
    } else {
      $signin_msg = 'Veuillez compléter tous les champs.';
      $type_signin_msg = 'error';
      require '../templates/connection.php';
    }
  }
}
