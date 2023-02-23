<?php

function disconnect()
{
  // Déconnexion de la session et suppr. de toutes les variables de session 
  session_start();
  $_SESSION = array();
  session_destroy();

  // Redirection vers l'index 
  header('location: index.php');
  exit;
}
