<?php


class DatabaseConnection
{
  public ?PDO $database = null;
  public function getConnection(): PDO
  {
    $dbName = 'lthk_db';
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';

    if ($this->database === null) {
      $this->database = new PDO("mysql:dbname=" . $dbName . ";host=" . $dbHost . ";charset=utf8mb4", $dbUser, $dbPass);
    }
    return $this->database;
  }
}
