<?php

$first_name = $_POST['first_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "info@kdengin.com";
$subject = "New message";

$kdengin = "kdengin.com";


mail ($to, $subject, $message, "From: $kdengin \r\n" . $first_name);
echo "Your message has been sent";


?>