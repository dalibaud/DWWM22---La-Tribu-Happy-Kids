<?php
require_once '../src/model/functions.php';
require_once '../src/model/product.php';

function shop()
{
  $products = (new ProductQuery())->queryConnection()->getProducts();

  require '../templates/shop.php';
}
