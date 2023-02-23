<?php
require_once '../src/model/model.php';

class Message
{
  public int $id;
  public string $name;
  public string $subject;
  public string $email;
  public string $content;
}

class MessageQuery extends Model
{
  public function sendMessage(string $name, string $subject, string $email, string $content)
  {
    $statement = $this->connection->getConnection()->prepare(
      "INSERT INTO `contact_message` (message_name, message_subject, message_email, message_content) VALUES (:name, :subject, :email, :content)"
    );
    $statement->bindValue(':name', $name, PDO::PARAM_STR);
    $statement->bindValue(':subject', $subject, PDO::PARAM_STR);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->bindValue(':content', $content, PDO::PARAM_STR);
    $statement->execute();
  }
}
