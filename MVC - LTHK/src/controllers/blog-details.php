<?php

use phpDocumentor\Reflection\Types\Boolean;

require_once '../src/model/functions.php';
require_once '../src/model/post.php';

function blogDetails(int $id)
{
  $postsQuery = new PostQuery();
  $post = $postsQuery->queryConnection()->getPost($id);
  $lastPosts = $postsQuery->lastPosts();

  require '../templates/blog-details.php';
}
