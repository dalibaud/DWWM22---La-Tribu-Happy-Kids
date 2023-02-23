<?php
require_once '../src/model/functions.php';
require_once '../src/model/message.php';

function sending(array $input)
{
  $mail_msg = '';
  $type_mail_msg = '';
  $db_msg = '';
  $type_db_msg = '';

  // Variables des éléments du message 
  $name = $input['contact-name'];
  $subject = $input['contact-subject'];
  $email = $input['contact-email'];
  $content = $input['contact-message'];
  $toEmail = 'dalibaud@gmail.com';

  $result = (new MessageQuery())->queryConnection()->sendMessage($name, $subject, $email, $content);

  // Contitution du message de succès d'inscription en bdd
  $db_msg = 'Vos informations de contact sont enregistrées avec succès.';
  $type_db_msg = 'success';

  // Constitution du header du mail
  $mailHeaders = 'From: ' . $name . '<' . $email . '>\r\n';
  // Si l'envoi est réussi
  if (mail($toEmail, $subject, $content, $mailHeaders)) {
    // Message de succès d'envoi
    $mail_msg = 'Vos informations de contact ont été reçues avec succès.';
    $type_mail_msg = 'success';
    require '../templates/contact.php';
    // Message d'erreur d'envoi
  } else {
    $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
    $type_mail_msg = 'error';
    require '../templates/contact.php';
  }
}
