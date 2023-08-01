<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
  $subject = $_POST['subject'];
  $message = $_POST['body'] ;
  $headers = 'From:'. "\r\n" . $_POST['email'], $_POST['telephone'] . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail('anna.mae.mankoo.harris@gmail.com', $subject, $message, $headers);

  die('Thank you for your email');
}