<?php
require_once '../src/model/functions.php';
require_once '../src/model/post.php';

function blog()
{
  $posts = (new PostQuery())->queryConnection()->getPosts();

  require '../templates/blog.php';
}
