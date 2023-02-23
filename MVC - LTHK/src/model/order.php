<?php
require_once '../src/model/model.php';

class Order
{
  public int $id;
  public int $user;
  public string $date;
  public string $ref;
  public float $totalPrice;
  public string $mode;
  public int $alt;

  public int $cart;
  public int $product;
  public string $name;
  public string $image;
  public float $price;
  public float $productTotal;
}


class OrderQuery extends Model
{
  public function getOrder(int $id): Order
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `blog_articles` WHERE blog_id = :id"
    );
    $statement->bindvalue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $element = $statement->fetch();
    $order = new Order();
    $order->id = $element['order_id'];
    $order->user = $element['user_id'];
    $order->date = $element['order_date'];
    $order->ref = $element['order_ref'];
    $order->price = $element['total_price'];
    $order->mode = $element['shipping_mode'];
    $order->alt = $element['alt_address'];

    return $order;
  }


  // ----- ACCOUNT.PHP ----- 
  public function lastOrder(int $id)
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `orders` INNER JOIN `order_detail` ON (orders.order_id= order_detail.order_id) INNER JOIN `products` ON (order_detail.product_id=products.product_id) WHERE orders.user_id = :id ORDER BY orders.order_id DESC LIMIT 1"
    );
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $element = $statement->fetch();
    if (!empty($element)) {
      $lastOrder = new Order();
      $lastOrder->id = $element['order_id'];
      $lastOrder->user = $element['user_id'];
      $lastOrder->date = $element['order_date'];
      $lastOrder->ref = $element['order_ref'];
      $lastOrder->totalPrice = $element['total_price'];
      $lastOrder->mode = $element['shipping_mode'];
      $lastOrder->alt = $element['alt_address'];

      $lastOrder->cart = $element['cart_id'];
      $lastOrder->product = $element['product_id'];
      $lastOrder->name = $element['product_name'];
      $lastOrder->image = $element['product_image'];
      $lastOrder->price = $element['product_price'];
      $lastOrder->productTotal = $element['product_total'];

      return $lastOrder;
    }
  }


  // ----- ACCOUNT.LAST-ORDER.PHP -----
  public function orderDetails(int $id): array
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `orders` INNER JOIN `order_detail` ON (orders.order_id= order_detail.order_id) INNER JOIN `products` ON (order_detail.product_id=products.product_id) WHERE orders.order_id = :id ORDER BY cart_id ASC"
    );
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $currentOrder = [];
    while ($element = $statement->fetch()) {
      $orderDetail = new Order();
      $orderDetail->id = $element['order_id'];
      $orderDetail->user = $element['user_id'];
      $orderDetail->date = $element['order_date'];
      $orderDetail->ref = $element['order_ref'];
      $orderDetail->totalPrice = $element['total_price'];
      $orderDetail->mode = $element['shipping_mode'];
      $orderDetail->alt = $element['alt_address'];

      $orderDetail->cart = $element['cart_id'];
      $orderDetail->product = $element['product_id'];
      $orderDetail->name = $element['product_name'];
      $orderDetail->image = $element['product_image'];
      $orderDetail->price = $element['product_price'];
      $orderDetail->quantity = $element['quantity'];
      $orderDetail->productTotal = $element['product_total'];

      $currentOrder[] = $orderDetail;
    }
    return $currentOrder;
  }


  // ----- ACCOUNT.ORDER.PHP ----- 
  public function getUserOrders($id): array
  {

    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `orders` INNER JOIN `order_detail` ON (orders.order_id= order_detail.order_id) INNER JOIN `products` ON (order_detail.product_id=products.product_id) WHERE orders.user_id = :id GROUP BY orders.order_id ORDER BY orders.order_id DESC"
    );
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $orders = [];
    while ($element = $statement->fetch()) {
      $order = new Order();
      $order->id = $element['order_id'];
      $order->user = $element['user_id'];
      $order->date = $element['order_date'];
      $order->ref = $element['order_ref'];
      $order->totalPrice = $element['total_price'];
      $order->mode = $element['shipping_mode'];
      $order->alt = $element['alt_address'];

      $order->cart = $element['cart_id'];
      $order->product = $element['product_id'];
      $order->name = $element['product_name'];
      $order->image = $element['product_image'];
      $order->price = $element['product_price'];
      $order->quantity = $element['quantity'];
      $order->productTotal = $element['product_total'];

      $orders[] = $order;
    }
    return $orders;
  }


  // ----- PAYMENT-SUCCESS.PHP -----
  public function createOrder(int $id, string $ref, float $total, string $shipping, int $alt)
  {
    $statement = $this->connection->getConnection()->prepare(
      "INSERT INTO `orders` (`user_id`, `order_date`, `order_ref`, `total_price`, `shipping_mode`, `alt_address`) VALUES (:id, :date, :ref, :price, :ship, :alt)"
    );
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':date', date("d-m-Y"), PDO::PARAM_STR);
    $statement->bindValue(':ref', $ref, PDO::PARAM_STR);
    $statement->bindValue(':price', $total, PDO::PARAM_STR);
    $statement->bindValue(':ship', $shipping, PDO::PARAM_STR);
    $statement->bindValue(':alt', $alt, PDO::PARAM_INT);
    $statement->execute();
  }

  public function getLastOrderID(): array
  {
    $statement = $this->connection->getConnection()->query(
      "SELECT * FROM `orders` ORDER BY order_id DESC LIMIT 1 "
    );
    $orderID = $statement->fetch();
    return $orderID;
  }

  public function createOrderDetails(int $orderID, int $id, int $productID, string $productName, int $quantity, float $price, float $total)
  {
    $statement = $this->connection->getConnection()->prepare(
      "INSERT INTO `order_detail` (`order_id`, `user_id`, `product_id`, `product_name`, `quantity`, `product_price`, `product_total`) VALUES (:order, :id, :product_id, :name, :quantity, :price, :total)"
    );
    $statement->bindValue(':order', $orderID, PDO::PARAM_INT);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':product_id', $productID, PDO::PARAM_INT);
    $statement->bindValue(':name', $productName, PDO::PARAM_STR);
    $statement->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $statement->bindValue(':price', $price, PDO::PARAM_STR);
    $statement->bindValue(':total', $total, PDO::PARAM_STR);
    $statement->execute();
  }
}
