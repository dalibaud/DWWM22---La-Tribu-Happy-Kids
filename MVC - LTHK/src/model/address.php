<?php
require_once '../src/model/model.php';

class Address
{
  public int $id;
  public int $user;
  public string $lastname;
  public string $firstname;
  public string $phone;
  public string $society;
  public string $street;
  public string $option;
  public int $zipcode;
  public string $city;
  public string $county;
  public string $country;
  public string $info;
}

class AddressQuery extends Model
{
  public function getAddress(int $id): Address
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `address` INNER JOIN `users` ON (address.user_id=users.user_id) WHERE users.user_id = :id"
    );
    $statement->bindvalue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $element = $statement->fetch();
    $address = new Address();
    $address->id = $element['address_id'];
    $address->user = $element['user_id'];
    $address->lastname = $element['last_name'];
    $address->firstname = $element['first_name'];
    $address->phone = $element['phone'];
    $address->society = (isset($element['society'])) ? $element['society'] : '';
    $address->street = $element['address_street'];
    $address->option = (isset($element['address_option'])) ? $element['address_option'] : '';
    $address->zipcode = $element['address_zipcode'];
    $address->city = $element['address_city'];
    $address->county = $element['address_county'];
    $address->country = $element['address_country'];
    $address->info = (isset($element['address_info'])) ? $element['address_info'] : '';
    $address->username = $element['username'];
    $address->email = $element['email'];

    return $address;
  }

  public function updateAddress(int $id, array $input)
  {
    $statement = $this->connection->getConnection()->prepare(
      "UPDATE `address` SET `first_name` = :first_name, `last_name` = :last_name, `phone` = :phone, `society` = :society, `address_street` = :street, `address_option` = :option, `address_zipcode` = :zipcode, `address_city` = :city, `address_county` = :county, `address_country` = :country WHERE address.user_id = :user_id "
    );
    $statement->bindValue(':first_name', $input['cust-firstname'], PDO::PARAM_STR);
    $statement->bindValue(':last_name', $input['cust-lastname'], PDO::PARAM_STR);
    $statement->bindValue(':phone', $input['cust-phone'], PDO::PARAM_STR);
    $statement->bindValue(':society', $input['cust-society'], PDO::PARAM_STR);
    $statement->bindValue(':street', $input['cust-street'], PDO::PARAM_STR);
    $statement->bindValue(':option', $input['cust-option'], PDO::PARAM_STR);
    $statement->bindValue(':zipcode', $input['cust-zipcode'], PDO::PARAM_INT);
    $statement->bindValue(':city', $input['cust-city'], PDO::PARAM_STR);
    $statement->bindValue(':county', $input['cust-county'], PDO::PARAM_STR);
    $statement->bindValue(':country', $input['cust-country'], PDO::PARAM_STR);
    $statement->bindValue(':user_id', $id, PDO::PARAM_INT);
    $statement->execute();
  }

  public function createNewAddress(int $id)
  {
    $statement = $this->connection->getConnection()->prepare(
      "INSERT INTO `address` (`user_id`) VALUES (:id)"
    );
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
  }
}
