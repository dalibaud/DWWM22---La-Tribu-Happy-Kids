<?php
require_once '../src/model/model.php';

class Post
{
  public int $id;
  public string $title;
  public string $image;
  public string $resume;
  public string $content;
  public int $day;
  public string $month;
}

class PostQuery extends Model
{
  public function getPosts(): array
  {
    $statement = $this->connection->getConnection()->query(
      "SELECT * FROM `blog_articles` ORDER BY blog_id DESC"
    );

    $posts = [];
    while ($element = $statement->fetch()) {
      $post = new Post();
      $post->id = $element['blog_id'];
      $post->title = $element['blog_title'];
      $post->image = $element['blog_image'];
      $post->resume = $element['blog_resume'];
      $post->content = $element['blog_description'];
      $post->day = $element['blog_day'];
      $post->month = $element['blog_month'];

      $posts[] = $post;
    }
    return $posts;
  }

  public function getPost(int $id): Post
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `blog_articles` WHERE blog_id = :id"
    );
    $statement->bindvalue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $element = $statement->fetch();
    if (!empty($element)) {
      $post = new Post();
      $post->id = $element['blog_id'];
      $post->title = $element['blog_title'];
      $post->image = $element['blog_image'];
      $post->resume = $element['blog_resume'];
      $post->content = $element['blog_description'];
      $post->day = $element['blog_day'];
      $post->month = $element['blog_month'];

      return $post;
    }
  }

  public function lastPosts(): array
  {
    $statement = $this->connection->getConnection()->query(
      "SELECT * FROM `blog_articles` ORDER BY blog_id DESC LIMIT 3"
    );

    $posts = [];
    while ($element = $statement->fetch()) {
      $post = new Post();
      $post->id = $element['blog_id'];
      $post->title = $element['blog_title'];
      $post->image = $element['blog_image'];
      $post->resume = $element['blog_resume'];
      $post->content = $element['blog_description'];
      $post->day = $element['blog_day'];
      $post->month = $element['blog_month'];

      $posts[] = $post;
    }
    return $posts;
  }
}
