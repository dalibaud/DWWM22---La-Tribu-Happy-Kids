<?php
require_once '../src/lib/database.php';

class Model
{
  public DatabaseConnection $connection;

  public function queryConnection()
  {
    $this->connection = new DatabaseConnection();
    return $this;
  }
}
