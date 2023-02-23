<?php
require_once '../src/model/model.php';

class User
{
  public int $id;
  public string $username;
  public string $email;
  public string $password;
}

class UserQuery extends Model
{
  public function getUser(string $name): User
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `users` WHERE username = :username OR email = :username"
    );
    $statement->bindvalue(':username', $name, PDO::PARAM_STR);
    $statement->execute();

    $element = $statement->fetch();
    $user = new User();
    $user->id = $element['user_id'];
    $user->username = $element['username'];
    $user->email = $element['email'];
    $user->password = $element['password'];

    return $user;
  }

  public function checkVisitor(string $name, string $pass)
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `users` WHERE username = :username OR email = :email"
    );
    $statement->bindValue(':username', $name, PDO::PARAM_STR);
    $statement->bindValue(':email', $pass, PDO::PARAM_STR);
    $statement->execute();

    $element = $statement->fetch();
    if (!empty($element)) {
      $user = new User();
      $user->id = $element['user_id'];
      $user->username = $element['username'];
      $user->email = $element['email'];
      $user->password = $element['password'];

      return $user;
    }
  }

  public function createUser(array $input)
  {
    $statement = $this->connection->getConnection()->prepare(
      "INSERT INTO `users` ( `username`, `email`, `password`) VALUES (:username, :email, :hash)"
    );
    $statement->bindValue(':username', ucfirst($input['username-2']), PDO::PARAM_STR);
    $statement->bindValue(':email', $input['email-2'], PDO::PARAM_STR);
    $statement->bindValue(':hash', password_hash($input["password-2"], PASSWORD_DEFAULT), PDO::PARAM_STR);
    $statement->execute();
  }

  public function changePassword(int $id, string $pass)
  {
    $statement = $this->connection->getConnection()->prepare(
      "UPDATE `users` SET `password` = :password WHERE user_id = :user_id "
    );
    $statement->bindValue(':password', password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
    $statement->bindValue(':user_id', $id, PDO::PARAM_INT);
    $statement->execute();
  }

  public function userUpdate(int $id, array $input)
  {
    $statement = $this->connection->getConnection()->prepare(
      "UPDATE `users` SET `username` = :username, `email` = :email WHERE user_id = :user_id "
    );
    $statement->bindValue(':username', $input['cust-username'], PDO::PARAM_STR);
    $statement->bindValue(':email', $input['cust-email'], PDO::PARAM_STR);
    $statement->bindValue(':user_id', $id, PDO::PARAM_INT);
    $statement->execute();
  }

  public function deleteAccount(int $id)
  {
    $statement = $this->connection->getConnection()->prepare(
      "DELETE `users`, `address`, `shipping_address` FROM `users` INNER JOIN `address` ON (users.user_id = address.user_id) INNER JOIN `shipping_address` ON (users.user_id = shipping_address.user_id) WHERE users.user_id = :id"
    );
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
  }

  // ----- NEW-PASS.PHP -----
  public function getUserNewPwd(array $input): User
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `users` WHERE username = :name AND email = :email"
    );
    $statement->bindValue(':name', $input['pwd-name'], PDO::PARAM_STR);
    $statement->bindValue(':email', $input['pwd-email'], PDO::PARAM_STR);
    $statement->execute();

    $element = $statement->fetch();
    $user = new User();
    $user->id = $element['user_id'];
    $user->username = $element['username'];
    $user->email = $element['email'];
    $user->password = $element['password'];

    return $user;
  }
}
