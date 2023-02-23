<?php

// INDEX.PHP Controllers autoloader 
function controllerAutoloader()
{
  $dir = scandir('../src/controllers/');
  array_shift($dir);
  array_shift($dir);
  foreach ($dir as $controller) {
    require '../src/controllers/' . $controller;
  }
}


// Appel du page header sur les pages 
function pageHeader($el, $el2)
{
  $page = $el;
  $subtitle = $el2;
  require_once '../includes/page-header.php';
}

// Switch de la sidebar pour les pages account 
function accountSidebar()
{
  $el = func_num_args();
  if ($el > 0) {
    require_once '../includes/account-sidebar-return.php';
  } else {
    require_once '../includes/account-sidebar.php';
  }
}

// Switch du layout visitor/user 
// sur les pages principales
function userLayoutSwitch($el)
{
  $title = $el;
  $content = ob_get_clean();
  if (!isset($_SESSION['pseudo'])) {
    require_once '../includes/layout.php';
  } else {
    require_once '../includes/layout.user.php';
  }
}

// Redirection des users pour la page login
function visitorLayout($el)
{
  $title = $el;
  $content = ob_get_clean();
  require_once '../includes/layout.php';
}

// Redirection des visitors pour les pages Account
function userLayout($el)
{
  $title = $el;
  $content = ob_get_clean();
  require_once '../includes/layout.user.php';
}

// Affichage du point actif sur la navbar, pour la page en cours
function activeLink()
{
  $args = func_get_args();
  $status = '';
  foreach ($args as $arg) {
    if (str_contains($_SERVER['REQUEST_URI'], $arg)) {
      $status = 'activeLink';
      return $status;
    } else {
      return $status;
    }
  }
}

// Décompte du nombre d'articles dans le panier 
function artCount()
{
  $artCount = 0;
  if (isset($_SESSION['panier'])) {
    foreach ($_SESSION['panier'] as $k => $v) {
      $artCount += $v;
    }
    return $artCount;
  } else {
    return $artCount;
  }
}

// CHECKOUT.PHP Ternaire pour l'adresse de facturation
function addressTernaire($array, $el)
{
  return ($array->$el ?? null) ? $array->$el : "";
}

// CHECKOUT.PHP Ternaire pour l'adresse de livraison
function addressTernaireAlt($array, $el, $array2)
{
  if (!empty($array)) {
    return ($array->$el ?? null) ? $array->$el : "";
  } else if ($array2->$el ?? null) {
    return $array2->$el;
  } else {
    return "";
  }
}

// Conversion pour les dates en français
function dateToFrench($date, $format)
{
  $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
  $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
  $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
  return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date))));
}
