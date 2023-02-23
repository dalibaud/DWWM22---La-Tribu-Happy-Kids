<?php
require_once '../src/model/functions.php';

controllerAutoloader();

// Déclaration de session
session_start();

try {
  if (isset($_GET['action']) && $_GET['action'] !== '') {
    // --------- About page ----------
    if ($_GET['action'] === 'about') {
      about();

      // --------- Product search page ----------
    } else if ($_GET['action'] === 'search' && isset($_POST['search'])) {
      $search = $_POST['search'];
      searching($search);

      // --------- Product category search page ----------
    } else if (($_GET['action'] === 'shop') && isset($_GET['cat'])) {
      $search = $_GET['cat'];
      searchingCat($search);

      // --------- Shop page ----------
    } else if ($_GET['action'] === 'shop') {
      shop();

      // --------- Product details page ----------
    } else if ($_GET['action'] === 'productdetails') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];
        productDetails($id);
      }

      // ---------- Cart product adding ----------
    } else if ($_GET['action'] === 'addtocart') {
      if (isset($_POST['quantity'])) {
        $add = $_POST;
        addToCart($add);
      }

      // --------- Blog page ----------
    } else if ($_GET['action'] === 'blog') {
      blog();

      // --------- Blog details page ----------
    } else if ($_GET['action'] === 'blogdetails') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];
        blogDetails($id);
      }

      // --------- Connection page ----------
    } else if ($_GET['action'] === 'connection') {
      if (!isset($_SESSION['id'])) {
        connection();
      } else {
        account();
      }

      // --------- Login page ----------
    } else if ($_GET['action'] === 'login') {
      if (isset($_POST['login'])) {
        $infos = $_POST;
        login($infos);
      }

      // --------- Signup page ----------
    } else if ($_GET['action'] === 'signup') {
      if (isset($_POST['signup'])) {
        $infos = $_POST;
        signup($infos);
      }

      // --------- New pass page ----------
    } else if ($_GET['action'] === 'forgot') {
      if (!isset($_SESSION['id'])) {
        newPass();
      } else {
        account();
      }

      // --------- Cart page ----------
    } else if ($_GET['action'] === 'cart') {
      cart();

      // --------- Checkout page ----------
    } else if ($_GET['action'] === 'checkout') {
      if (!isset($_SESSION['id'])) {
        connection();
      } else {
        checkout();
      }

      // --------- Final-cart page ----------
    } else if ($_GET['action'] === 'finalcart') {
      if (!isset($_SESSION['id'])) {
        connection();
      } else {
        finalCart();
      }

      // --------- Payment page ----------
    } else if ($_GET['action'] === 'payment') {
      if (!isset($_SESSION['id'])) {
        connection();
      } else {
        processPayment();
      }

      // --------- Payment Success page ----------
    } else if ($_GET['action'] === 'paymentsuccess') {
      if (!isset($_SESSION['id'])) {
        connection();
      } else {
        paymentSuccess();
      }

      // --------- Account page ----------
    } else if ($_GET['action'] === 'account') {
      if (isset($_SESSION['id'])) {
        account();
      } else {
        connection();
      }

      // --------- Account address page ----------
    } else if ($_GET['action'] === 'address') {
      if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        userAddress($id);
      } else {
        connection();
      }

      // --------- Account address edition page ----------
    } else if ($_GET['action'] === 'editaddress') {
      if (isset($_SESSION['id'])) {
        editAddress();
      } else {
        connection();
      }

      // --------- Account informations page ----------
    } else if ($_GET['action'] === 'informations') {
      if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $input = $_POST;
        informations($id, $input);
      } else {
        connection();
      }

      // --------- Account last order page ----------
    } else if ($_GET['action'] === 'lastorder') {
      if (isset($_SESSION['id'])) {
        $id = $_GET['order_id'];
        orderDetails($id);
      } else {
        connection();
      }

      // --------- Account orders page ----------
    } else if ($_GET['action'] === 'orders') {
      if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        userOrders($id);
      } else {
        connection();
      }

      // --------- Contact page ----------
    } else if ($_GET['action'] === 'contact') {
      contact();

      // --------- Sending message ----------
    } else if ($_GET['action'] === 'sendmessage' && isset($_POST['send'])) {
      $input = $_POST;
      sending($input);

      // --------- Logout ----------
    } else if ($_GET['action'] === 'disconnect') {
      disconnect();

      // ----- Sinon, Erreur 404 -----
    } else {
      throw new Exception("Erreur 404 : la page que vous recherchez n'existe pas.");
    }
  } else {
    homepage();
  }
} catch (Exception $e) {
  $errorMessage =  $e->getMessage();
  require "../templates/error.php";
}
