<?php
$name = $_POST['user'];
$adr = $_POST['adress'];
$cont = $_POST['country'];
$email_subject = "new msg";
$email_body = "Name: {$name} adress: {$adr} country: {$cont} ";
$to="mradmohamed700@gmail.com";
mail($to,$email_subject,$email_body);
?>