<?php
require_once '../src/model/functions.php';
require_once '../src/model/post.php';
require_once '../src/model/product.php';

function homepage()
{
  $products = (new ProductQuery())->queryConnection()->getProducts();
  $posts = (new PostQuery())->queryConnection()->getPosts();

  require '../templates/homepage.php';
}
