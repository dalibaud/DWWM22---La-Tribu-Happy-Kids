<?php
require_once '../src/model/functions.php';
require_once '../src/model/product.php';

function searchingCat(string $input)
{
  $products = (new ProductQuery())->queryConnection()->searchCat($input);

  require '../templates/shop.php';
}
