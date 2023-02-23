<?php
require_once '../src/model/functions.php';
require_once '../src/model/user.php';

function newPass()
{
  // Variables des messages de succès/d'erreur 
  $pwdInfos = '';
  $type_pwdInfos = '';

  // Si le form est envoyé 
  if (isset($_POST['pwd-send'])) {
    // Requête pour trouver le compte dans la bdd 
    $userExists = new UserQuery();
    $exists  = $userExists->queryConnection()->getUserNewPwd($_POST);

    // Si le compte existe en bdd, et que l'authentification est validée 
    if ($exists->username == $_POST['pwd-name'] && $exists->email == ($_POST['pwd-email'])) {
      // Requête pour changer le mot de passe en bdd 
      $newPwd = $userExists->changePassword($exists->id, $_POST['new-pwd']);

      // Redirection vers la page d'accueil 
      header('location: index.php');
      // Message d'erreur si un des champs ne correspond pas à un compte user 
    } else {
      $pwdInfos = 'Nom d\'utilisateur ou adresse email incorrect(e).';
      $type_pwdInfos = 'error';
      require '../templates/new-pass.php';
    }
  }

  require '../templates/new-pass.php';
}
