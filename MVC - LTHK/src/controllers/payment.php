<?php
require_once '../src/model/functions.php';

function processPayment()
{
  header("refresh:4;url=index.php?action=paymentsuccess");

  require "../templates/payment.php";
}
