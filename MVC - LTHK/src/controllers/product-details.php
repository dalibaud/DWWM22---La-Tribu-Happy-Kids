<?php
require_once '../src/model/functions.php';
require_once '../src/model/product.php';

function productDetails(int $id)
{
  $product = (new ProductQuery())->queryConnection()->getProduct($id);

  require '../templates/product-details.php';
}
