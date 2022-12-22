<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'gocha.berulava@gmail.com';
  $subject = 'Contact Form Submission';
  $headers = "From: $email\r\n";

  mail($to, $subject, $message, $headers);
}
?>