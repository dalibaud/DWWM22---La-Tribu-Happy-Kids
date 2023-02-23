<?php
require_once '../src/model/functions.php';
require_once '../src/model/product.php';

function searching(string $input)
{
  $products = (new ProductQuery())->queryConnection()->searchProduct($input);

  require '../templates/shop.php';
}
