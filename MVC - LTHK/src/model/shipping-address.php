<?php
require_once '../src/model/model.php';

class ShippingAddress
{
  public int $id;
  public string $name;
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


class ShippingAddressQuery extends Model
{
  public function getShippingAddress(int $id)
  {
    $statement = $this->connection->getConnection()->prepare(
      "SELECT * FROM `shipping_address` INNER JOIN `users` ON (shipping_address.user_id=users.user_id) WHERE users.user_id = :id"
    );
    $statement->bindvalue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $element = $statement->fetch();
    if (!empty($element)) {
      $address = new ShippingAddress();
      $address->id = $element['address_id'];
      $address->name = $element['address_name'];
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

      return $address;
    }
  }

  public function updateShippingAddress(int $id, string $name, array $input)
  {
    $statement = $this->connection->getConnection()->prepare(
      "UPDATE `shipping_address` SET `first_name` = :first_name, `last_name` = :last_name, `phone` = :phone, `society` = :society, `address_street` = :street, `address_option` = :option, `address_zipcode` = :zipcode, `address_city` = :city, `address_county` = :county, `address_country` = :country, `address_name` = :name, `address_info` = :info WHERE shipping_address.user_id = :user_id  "
    );
    $statement->bindValue(':first_name', $input['cust-firstname-2'], PDO::PARAM_STR);
    $statement->bindValue(':last_name', $input['cust-lastname-2'], PDO::PARAM_STR);
    $statement->bindValue(':phone', $input['cust-phone-2'], PDO::PARAM_STR);
    $statement->bindValue(':society', $input['cust-society-2'], PDO::PARAM_STR);
    $statement->bindValue(':street', $input['cust-street-2'], PDO::PARAM_STR);
    $statement->bindValue(':option', $input['cust-option-2'], PDO::PARAM_STR);
    $statement->bindValue(':zipcode', $input['cust-zipcode-2'], PDO::PARAM_INT);
    $statement->bindValue(':city', $input['cust-city-2'], PDO::PARAM_STR);
    $statement->bindValue(':county', $input['cust-county-2'], PDO::PARAM_STR);
    $statement->bindValue(':country', $input['cust-country-2'], PDO::PARAM_STR);
    $statement->bindValue(':name', $name, PDO::PARAM_STR);
    $statement->bindValue(':info', $input['cust-info-2'], PDO::PARAM_STR);
    $statement->bindValue(':user_id', $id, PDO::PARAM_INT);
    $statement->execute();
  }

  public function disableShippingAddress(int $id)
  {
    $statement = $this->connection->getConnection()->prepare(
      "UPDATE `shipping_address` SET `first_name` = null WHERE address_id = :id"
    );
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
  }

  public function createNewShippingAddress(int $id)
  {
    $statement = $this->connection->getConnection()->prepare(
      "INSERT INTO `shipping_address` (`user_id`) VALUES (:id)"
    );
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
  }
}
