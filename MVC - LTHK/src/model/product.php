<?php
require_once '../src/model/model.php';

class Product
{
  public int $id;
  public string $name;
  public string $image;
  public float $price;
  public string $description;
  public string $status;
}

class ProductQuery extends Model
{
  public function getProducts(): array
  {
    $statement = $this->connection->getConnection()->query(
      "SELECT * FROM `products` ORDER BY product_id ASC"
    );

    $products = [];
    while ($element = $statement->fetch()) {
      $product = new Product();
      $product->id = $element['product_id'];
      $product->name = $element['product_name'];
      $product->image = $element['product_image'];
      $product->price = $element['product_price'];
      $product->description = $element['product_description'];
      $product->status = (isset($element['product_status'])) ? $element['product_status'] : '';

      $products[] = $product;
    }
    return $products;
  }

  public function getProduct(int $id): Product
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `products` WHERE product_id = :id"
    );
    $statement->bindvalue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $element = $statement->fetch();
    $product = new Product();
    $product->id = $element['product_id'];
    $product->name = $element['product_name'];
    $product->image = $element['product_image'];
    $product->price = $element['product_price'];
    $product->description = $element['product_description'];
    $product->status = (isset($element['product_status'])) ? $element['product_status'] : '';

    return $product;
  }

  public function searchProduct(string $search): array
  {
    $name = '%' . $search . '%';

    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `products` WHERE product_name LIKE :name ORDER BY `product_id` ASC"
    );
    $statement->bindValue(':name', $name, PDO::PARAM_STR);
    $statement->execute();

    $result = [];
    while ($element = $statement->fetch()) {
      $product = new Product();
      $product->id = $element['product_id'];
      $product->name = $element['product_name'];
      $product->image = $element['product_image'];
      $product->price = $element['product_price'];
      $product->description = $element['product_description'];
      $product->status = (isset($element['product_status'])) ? $element['product_status'] : '';

      $result[] = $product;
    }
    return $result;
  }

  public function searchCat(string $status): array
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `products` WHERE product_status = :status ORDER BY `product_id` ASC"
    );
    $statement->bindValue(':status', $status, PDO::PARAM_STR);
    $statement->execute();

    $result = [];
    while ($element = $statement->fetch()) {
      $product = new Product();
      $product->id = $element['product_id'];
      $product->name = $element['product_name'];
      $product->image = $element['product_image'];
      $product->price = $element['product_price'];
      $product->description = $element['product_description'];
      $product->status = (isset($element['product_status'])) ? $element['product_status'] : '';

      $result[] = $product;
    }
    return $result;
  }

  public function getCart(array $tempCart): array
  {
    $array_to_question_marks = implode(', ', array_fill(0, count($tempCart), '?'));

    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `products` WHERE product_id IN (" . $array_to_question_marks . ")"
    );
    $statement->execute(array_keys($tempCart));

    $products = [];
    while ($element = $statement->fetch()) {
      $product = new Product();
      $product->id = $element['product_id'];
      $product->name = $element['product_name'];
      $product->image = $element['product_image'];
      $product->price = $element['product_price'];
      $product->description = $element['product_description'];
      $product->status = (isset($element['product_status'])) ? $element['product_status'] : '';

      $products[] = $product;
    }
    return $products;
  }
}
